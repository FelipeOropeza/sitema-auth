<?php

namespace App\Middleware;

use Closure;
use Core\Contracts\MiddlewareInterface;
use Core\Http\Request;

class AuthMiddleware implements MiddlewareInterface
{
    public function handle(Request $request, Closure $next)
    {
        if (!isset($_SESSION['auth'])) {
            header("Location: /login");
            exit;
        }

        if ($_SESSION['auth']['permission'] != 'admin') {
            http_response_code(403);
            echo "Você não tem permissão para acessar essa página.";
            exit;
        }

        return $next($request);
    }
}
