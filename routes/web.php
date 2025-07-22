<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DizimoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aqui é onde você pode registrar as rotas web para sua aplicação.
| O Laravel automaticamente aplica o grupo de middleware 'web' a este arquivo,
| ativando sessões, cookies, etc.
|
*/

// --- Rotas Públicas ---
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');
Route::get('/horarios', [PageController::class, 'horarios'])->name('horarios');
Route::get('/evangelho', [PageController::class, 'evangelho'])->name('evangelho');


// --- Rotas de Autenticação (para visitantes) ---
Route::middleware('guest:fiel')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/cadastro', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/cadastro', [AuthController::class, 'register'])->name('register.post');
});


// --- Rotas Protegidas (apenas para usuários logados) ---
Route::middleware('auth:fiel')->group(function () {
    Route::get('/dizimo/pagamento', [DizimoController::class, 'showPagamento'])->name('dizimo.pagamento');

    // A rota de logout também deve ser para usuários autenticados
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});