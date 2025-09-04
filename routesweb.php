<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/chef', [PrincipalController::class, 'chef']);
Route::get('/card', [PrincipalController::class, 'card']);
Route::get('/profile', [PrincipalController::class, 'profile']);


