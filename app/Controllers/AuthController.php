<?php

namespace App\Controllers;

use Core\Http\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        $error = $_SESSION['error'] ?? '';
        unset($_SESSION['error']);

        return view('login', ['error' => $error]);
    }

    public function loginPost()
    {
        try {
            $email = request()->get('email');
            $password = request()->get('password');

            $userModel = new User();

            $result = $userModel->query("SELECT * FROM users WHERE email = :email LIMIT 1", [
                'email' => $email
            ]);

            $user = $result[0] ?? null;

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['auth'] = [
                    'id' => $user['id'],
                    'nome' => $user['nome'],
                    'permission' => 'admin'
                ];

                header("Location: /");
                exit;
            }

            $_SESSION['error'] = 'E-mail ou senha incorretos.';
            $_SESSION['_flash_old'] = request()->all();

            header("Location: /login");
            exit;
        } catch (\Throwable $th) {
            die("Erro: " . $th->getMessage());
        }
    }

    public function cadastro()
    {
        $error = $_SESSION['error'] ?? '';
        unset($_SESSION['error']);

        return view('cadastro', ['error' => $error]);
    }

    public function cadastroPost()
    {
        $user = new User();
        $validatedData = validate($user);

        if ($validatedData['password'] != $_POST['password_confirmation']) {
            $_SESSION['error'] = 'As senhas não coincidem';
            $_SESSION['_flash_old'] = request()->all();

            header("Location: /cadastro");
            exit;
        }

        try {
            $user->insert([
                'nome' => $validatedData['nome'],
                'email' => $validatedData['email'],
                'password' => password_hash($validatedData['password'], PASSWORD_DEFAULT)
            ]);

            header("Location: /login");
            exit;
        } catch (\PDOException $e) {
            die("ERRO DE BANCO DE DADOS: " . $e->getMessage());
        }
    }
}
