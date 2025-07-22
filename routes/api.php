<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FielApiController;

// Gera todas as rotas de CRUD (GET, POST, PUT/PATCH, DELETE) para /api/fieis
Route::apiResource('fieis', FielApiController::class);