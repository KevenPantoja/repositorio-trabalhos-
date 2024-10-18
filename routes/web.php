<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuModeloController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('teste_formulario');
});

Route::get('formulario', [MeuModeloController::class, 'create'])->name('meu_modelo.create');
Route::post('formulario', [MeuModeloController::class, 'store'])->name('meu_modelo.store');
Route::resource('users', UserController::class);
