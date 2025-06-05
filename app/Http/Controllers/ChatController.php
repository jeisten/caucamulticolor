<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DeepSeekService;
use Illuminate\Support\Facades\Log;

class ChatController extends Controller
{
    public function ask(Request $request, DeepSeekService $deepSeekService)
    {
        try {
            $request->validate(['question' => 'required|string']);
            
            // Debug: Log de la pregunta recibida
            Log::info("Pregunta recibida: " . $request->input('question'));
            
            $response = $deepSeekService->askDeepSeek($request->input('question'));
            
            // Debug: Log de la respuesta de DeepSeek
            Log::info("Respuesta de DeepSeek: " . json_encode($response));
            
            return response()->json([
                'answer' => $response['choices'][0]['message']['content'] ?? 'No se pudo generar respuesta',
            ]);
            
        } catch (\Exception $e) {
            Log::error("Error en ChatController: " . $e->getMessage());
            return response()->json([
                'error' => 'Oops, algo salió mal. Por favor intenta más tarde.',
                'details' => env('APP_DEBUG') ? $e->getMessage() : null,
            ], 500);
        }
    }
}