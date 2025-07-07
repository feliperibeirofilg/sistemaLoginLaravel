<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <nav class="navbar nvabar-expand-lg navbar-dark bg-dark">
            <a href="/" class="navbar-brand">Inicio</a>

            <a href="usuarios/criarUsuario" class="navbar-brand">Criar usuário</a>

        </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>