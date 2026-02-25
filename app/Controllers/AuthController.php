<?php

namespace App\Controllers;

use Core\Http\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost()
    {
        echo "Login Post";
    }

    public function cadastro()
    {
        // Pega a mensagem de erro se ela existir e depois a apaga
        $error = $_SESSION['error'] ?? '';
        unset($_SESSION['error']);

        // Manda pro view como uma variável
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
        }
        catch (\PDOException $e) {
            // Isso vai jogar na tela exatamente a reclamação do seu banco de dados
            die("ERRO DE BANCO DE DADOS: " . $e->getMessage());
        }
    }
}
