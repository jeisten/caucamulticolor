<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class DeepSeekService 
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('DEEPSEEK_API_KEY'); // Key cargada desde .env
    }

    public function askDeepSeek(string $userPrompt): array
    {
        // Contexto específico de tu portal web (¡personalízalo!)
        $portalContext = "
            Eres el asistente virtual del portal 'TechShop'. 
            Información clave sobre el portal:
            - Especializado en venta de productos electrónicos (laptops, smartphones, accesorios).
            - Envíos gratis en compras mayores a $100.
            - Soporte técnico 24/7 via chat.
            - Promoción actual: 15% de descuento en tablets hasta el 30/06.
            
            Instrucciones:
            1. Saluda amablemente y ofrece ayuda.
            2. Si preguntan por envíos, menciona la promoción de envío gratis.
            3. Para preguntas técnicas, deriva al soporte.
        ";

        try {
            $response = $this->client->post('https://api.deepseek.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->apiKey,
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'deepseek-chat',
                    'messages' => [
                        ['role' => 'system', 'content' => $portalContext], // Contexto como 'system'
                        ['role' => 'user', 'content' => $userPrompt],      // Pregunta del usuario
                    ],
                    'temperature' => 0.7,  // Balance entre creatividad y precisión
                    'max_tokens' => 200,   // Máximo de palabras en la respuesta
                ],
            ]);

            return json_decode($response->getBody(), true);

        } catch (\Exception $e) {
            Log::error("Error al llamar a DeepSeek API: " . $e->getMessage());
            return ['error' => 'Oops, algo salió mal. Por favor intenta más tarde.'];
        }
    }
}