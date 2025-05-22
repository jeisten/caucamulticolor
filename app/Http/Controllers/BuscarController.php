<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscarController extends Controller
{
    public function buscar(Request $request)
    {
        $query = $request->input('q');
        $resultados = [];

        // Simulación: buscar palabras en los títulos de las páginas principales
        $paginas = [
            [
                'titulo' => 'Inicio',
                'url' => url('/')
            ],
            [
                'titulo' => 'Trámites',
                'url' => url('/tramites')
            ],
            [
                'titulo' => 'Noticias',
                'url' => url('/noticias')
            ],
            [
                'titulo' => 'Contacto',
                'url' => url('/contacto')
            ],
        ];

        foreach ($paginas as $pagina) {
            if (stripos($pagina['titulo'], $query) !== false) {
                $resultados[] = $pagina;
            }
        }

        return view('layouts.resultados', compact('resultados', 'query'));
    }
}
