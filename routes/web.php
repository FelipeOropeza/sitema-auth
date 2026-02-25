<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Middleware\AuthMiddleware;

/** @var \Core\Routing\Router $router */

// ==========================================
// ROTAS DE APLICAÇÃO (WEB / HTML)
// ==========================================

$router->get('/', [HomeController::class , 'index'])->middleware(AuthMiddleware::class);

$router->get('/login', [AuthController::class, 'login'])->name('login');
$router->post('/login', [AuthController::class, 'loginPost'])->name('loginPost');
$router->get('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro');
$router->post('/cadastro', [AuthController::class, 'cadastroPost'])->name('cadastroPost');