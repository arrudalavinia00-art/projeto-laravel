<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

// Rotas de páginas principais
Route::get('/chef', [PrincipalController::class, 'chef']);
Route::get('/card', [PrincipalController::class, 'card']);
Route::get('/profile', [PrincipalController::class, 'profile']);
Route::get('/sobre', [PrincipalController::class, 'sobre']);

// Rotas de contato
Route::get('/contato', [PrincipalController::class, 'contato']);
Route::post('/contato', [PrincipalController::class, 'enviarContato']);