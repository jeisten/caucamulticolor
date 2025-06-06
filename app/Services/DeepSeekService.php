<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class DeepSeekService 
{
    protected $client;
    protected $apiKey;
    protected $googleMapsApiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('DEEPSEEK_API_KEY');
        $this->googleMapsApiKey = env('GOOGLE_MAPS_API_KEY');
    }

    public function askDeepSeek(string $userPrompt): array
    {
        // Contexto del portal con instrucciones mejoradas
        $portalContext = "    
Eres 'Multi', el asistente virtual del portal turístico 'DescubreCauca'.

Sobre el portal:
- Promueve el turismo en el Cauca: sitios naturales, cultura, gastronomía, historia y planes.
- Público objetivo: personas interesadas en visitar o conocer más del departamento.

Instrucciones para 'Multi':
1. La primera vez di: 'Hola, soy Multi, tu asistente virtual. ¿En qué te puedo ayudar hoy? 😊'
2. Sé breve, cálido y conversacional. Usa frases de máximo 2-3 oraciones.
3. Cuando el usuario pregunte por ubicaciones:
   - Proporciona los 3 mejores resultados de Google Maps
   - Formato para cada lugar:
     🏷️ [Nombre] 
     ⭐ [Calificación]/5 
     📍 [Dirección]
   - Separa cada lugar con dos saltos de línea
4. Si el usuario solo dice 'Hola', responde con sugerencia rápida:
   - 'En tendencia: salchichón con papa. ¡Delicia caucana!'
   - 'Recomiendo El Morro en Popayán (Cl. 18 Nte. #Carrera 2)'
5. Alterna recomendaciones para variedad.
6. Mantén tono amable y natural.

Ejemplo de respuesta con lugares:
🔍 Estos son los mejores lugares que encontré:

🏷️ Café San Alberto
⭐ 4.7/5
📍 Cra. 6 #7-18, Popayán

🏷️ Restaurante La Cosecha
⭐ 4.5/5
📍 Cl. 5 #8-39, Centro

🏷️ Arepas Doña Pacho
⭐ 4.3/5
📍 Av. 3N #15-22

¿Te interesa alguno en particular?
";

        // Verificar si la pregunta es sobre ubicaciones
        if ($this->isLocationQuery($userPrompt)) {
            $locationResults = $this->getGoogleMapsResults($userPrompt);
            
            if (!empty($locationResults)) {
                // Agregar los resultados de Maps al contexto
                $portalContext .= "\n\nInformación actual de ubicaciones:\n" . $locationResults;
            }
        }

        try {
            $response = $this->client->post('https://api.deepseek.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'deepseek-chat',
                    'messages' => [
                        ['role' => 'system', 'content' => $portalContext],
                        ['role' => 'user', 'content' => $userPrompt],
                    ],
                    'temperature' => 0.7,
                    'max_tokens' => 250, // Aumentado para permitir mejor formato
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);
            
            // Añadir metadata para estilos
            if (isset($responseData['choices'][0]['message']['content'])) {
                $isLocationResponse = strpos($responseData['choices'][0]['message']['content'], '🏷️') !== false;
                $responseData['metadata'] = [
                    'is_location_response' => $isLocationResponse,
                    'user_message_style' => [
                        'background' => '#3498db',
                        'text_color' => '#ffffff'
                    ],
                    'assistant_message_style' => [
                        'background' => $isLocationResponse ? '#e8f4fc' : '#f0f0f0',
                        'text_color' => '#333333',
                        'border_left' => $isLocationResponse ? '4px solid #3498db' : 'none'
                    ]
                ];
            }

            return $responseData;

        } catch (\Exception $e) {
            Log::error("Error al llamar a DeepSeek API: " . $e->getMessage());
            return ['error' => 'Oops, algo salió mal. Por favor intenta más tarde.'];
        }
    }

    protected function isLocationQuery(string $query): bool
    {
        $locationKeywords = [
            'dónde', 'donde', 'ubicación', 'dirección', 'sitios', 'lugares', 
            'restaurantes', 'cafés', 'hoteles', 'visitar', 'en popayán', 'en cauca',
            'recomiendas', 'busco', 'conoces', 'sabes'
        ];
        
        foreach ($locationKeywords as $keyword) {
            if (stripos($query, $keyword) !== false) {
                return true;
            }
        }
        
        return false;
    }

    protected function getGoogleMapsResults(string $query): string
    {
        try {
            $placeType = $this->extractPlaceType($query) ?: "lugar";
            
            $response = $this->client->get('https://maps.googleapis.com/maps/api/place/textsearch/json', [
                'query' => [
                    'query' => $placeType . ' en Popayán, Cauca',
                    'key' => $this->googleMapsApiKey,
                    'language' => 'es',
                    'region' => 'co',
                ]
            ]);

            $data = json_decode($response->getBody(), true);

            if ($data['status'] !== 'OK' || empty($data['results'])) {
                return '';
            }

            $topResults = array_slice($data['results'], 0, 3);
            $resultsText = "🔍 Estos son los mejores lugares que encontré:\n\n";

            foreach ($topResults as $place) {
                $rating = isset($place['rating']) ? number_format($place['rating'], 1) : 'Sin calificación';
                $address = $place['formatted_address'] ?? 'Dirección no disponible';
                
                $resultsText .= sprintf(
                    "🏷️ %s\n⭐ %s/5\n📍 %s\n\n",
                    $place['name'],
                    $rating,
                    $this->shortenAddress($address)
                );
            }

            return $resultsText . "¿Te interesa alguno en particular?";

        } catch (\Exception $e) {
            Log::error("Error al llamar a Google Maps API: " . $e->getMessage());
            return '';
        }
    }

    protected function extractPlaceType(string $query): string
    {
        $foodKeywords = ['arepa', 'comida', 'restaurante', 'café', 'desayuno', 'almuerzo', 'cena', 'comer'];
        $tourismKeywords = ['hotel', 'hostal', 'museo', 'parque', 'iglesia', 'atractivo', 'turístico', 'pueblo', 'mirador'];
        
        $words = explode(' ', strtolower(preg_replace('/[^a-zA-ZáéíóúÁÉÍÓÚñÑ ]/', '', $query)));
        
        foreach ($words as $word) {
            if (in_array($word, $foodKeywords)) return $word;
            if (in_array($word, $tourismKeywords)) return $word;
        }
        
        return '';
    }

    protected function shortenAddress(string $address): string
    {
        // Acortar direcciones largas
        $replacements = [
            ', Popayán, Cauca, Colombia' => '',
            ', Popayán, Colombia' => '',
            ', Colombia' => ''
        ];
        
        return str_replace(array_keys($replacements), array_values($replacements), $address);
    }
}