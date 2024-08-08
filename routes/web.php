<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Página de login!';
});

Route::get('/signup', function () {
    return 'Página de cadastro!';
});

Route::get('/login', function () {
    echo 'Login';
});

Route::prefix('app')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
});

Route::fallback(function () { 
    echo 'A rota acessada não existe. <a href="/">Clique aqui</a> para voltar para a página inicial.';  
});