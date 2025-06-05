<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuscarController;
use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/ask', [ChatController::class, 'ask'])->name('ask');
//// para redigir a la pagina de lugares turisticos
Route::get('/lug-turis', function () {
    return view('lug_turis');
})->name('lug_turis');
/// para redigir a la pagina de alojamiento
Route::get('/alojamientos', function () {
    return view('alojamientos');
})->name('alojamientos');
/// para redigir a la pagina de comidas tipicas
Route::get('/comida', function () {
    return view('comida');
})->name('comida');
/// para redigir a la pagina de nosotros    
Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');



Route::get('/buscar', [BuscarController::class, 'buscar'])->name('buscar');
