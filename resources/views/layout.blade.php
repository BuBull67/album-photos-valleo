<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album Photo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>
<body>
    <header class="Header">
    <span class="logo">Album Photo</span>
</header>

    <main class="site-main">
        @yield('content')
    </main>

    <footer class="footer">
        <p>© {{ date('2026') }} Album Photos de Valentin et Léo</p>
    </footer>
</body>
</html>