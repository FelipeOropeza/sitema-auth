<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistema Auth</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', sans-serif;
            margin: 0;
        }

        .auth-card {
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }

        .auth-header {
            background-color: #f8f9fa;
            padding: 2rem;
            text-align: center;
            border-bottom: 1px solid #e9ecef;
        }

        .auth-header h3 {
            margin: 0;
            font-weight: 700;
            color: #343a40;
        }

        .auth-body {
            padding: 2rem;
        }

        .form-control-custom {
            border-radius: 8px;
            padding: 10px 15px;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
        }

        .form-control-custom:focus {
            background-color: #fff;
            box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
            border-color: #667eea;
        }

        .btn-custom {
            background-color: #667eea;
            border-color: #667eea;
            border-radius: 8px;
            padding: 10px 15px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #5a6fd6;
            border-color: #5a6fd6;
            transform: translateY(-2px);
        }

        .auth-footer {
            text-align: center;
            margin-top: 1.5rem;
        }

        .auth-footer a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .auth-footer a:hover {
            color: #5a6fd6;
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="auth-card">
        <div class="auth-header">
            <h3>Bem-vindo</h3>
            <p class="text-muted mb-0 mt-2">Faça login na sua conta</p>
        </div>
        <div class="auth-body">
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger p-2 text-center" style="border-radius: 8px; font-size: 0.9em;">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <form action="<?= route('loginPost') ?>" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label text-secondary fw-semibold">E-mail</label>
                    <input type="email" class="form-control form-control-custom" id="email" name="email" placeholder="Seu e-mail" required />
                    <span class="text-danger" style="font-size: 0.85em;"><?= errors('email') ?></span>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label text-secondary fw-semibold d-flex justify-content-between">
                        <span>Senha</span>
                        <a href="#" class="text-decoration-none" style="font-size: 0.85em;">Esqueceu?</a>
                    </label>
                    <input type="password" class="form-control form-control-custom" id="password" name="password" placeholder="Sua senha" required>
                    <span class="text-danger" style="font-size: 0.85em;"><?= errors('password') ?></span>
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-custom shadow-sm">Entrar</button>
                </div>
            </form>
            <div class="auth-footer">
                <p class="text-muted m-0">Ainda não tem uma conta? <a href="<?= route('cadastro') ?>">Cadastre-se</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>