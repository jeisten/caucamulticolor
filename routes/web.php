<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuscarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buscar', [BuscarController::class, 'buscar'])->name('buscar');
