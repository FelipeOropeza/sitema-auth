<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema Auth</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar com Degradê idêntico ao Login */
        .navbar-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: #fff !important;
            letter-spacing: 0.5px;
        }

        .navbar-text {
            color: rgba(255, 255, 255, 0.85) !important;
        }

        .btn-logout {
            background-color: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 8px;
            font-weight: 600;
            padding: 8px 20px;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background-color: rgba(255, 255, 255, 0.3);
            color: #fff;
        }

        /* Container Principal */
        .main-container {
            margin-top: 50px;
        }

        .welcome-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: none;
            padding: 2.5rem;
            text-align: center;
        }

        .welcome-icon {
            font-size: 4rem;
            color: #667eea;
            margin-bottom: 20px;
        }

        .welcome-title {
            font-weight: 700;
            color: #343a40;
            margin-bottom: 10px;
        }

        .welcome-subtitle {
            font-size: 1.1rem;
            color: #6c757d;
        }
    </style>
    <!-- Icons opcionais do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <!-- Navegação Superior -->
    <nav class="navbar navbar-expand-lg navbar-custom py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi bi-shield-lock-fill me-2 fs-4"></i>
                Sistema Auth
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Links se precisar no futuro -->
                </ul>
                <div class="d-flex align-items-center">
                    <span class="navbar-text me-3 fw-medium">
                        Olá, <?= $_SESSION['auth']['nome'] ?? 'Visitante' ?>!
                    </span>
                    <a href="/login" class="btn btn-logout">Sair</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da Página -->
    <div class="container main-container d-flex justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="welcome-card">
                <div class="welcome-icon">
                    <i class="bi bi-person-check-fill"></i>
                </div>
                <h1 class="welcome-title">Bem-vindo(a) ao Sistema!</h1>
                <p class="welcome-subtitle">
                    Você autenticou-se com sucesso e agora possui permissão
                    <span class="badge bg-primary rounded-pill"><?= $_SESSION['auth']['permission'] ?? 'Visitante' ?></span>.
                    Sinta-se em casa!
                </p>

                <hr class="my-4" style="opacity: 0.1;">

                <p class="text-muted" style="font-size: 0.9em;">
                    Essa é a área protegida do seu aplicativo web PHP construído com MVC customizado. A partir daqui você pode expandir as funcionalidades da sua aplicação!
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>