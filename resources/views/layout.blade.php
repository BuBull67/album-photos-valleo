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
    <header class="site-header">
    <span class="logo">Album Photo</span>
</header>

    <main class="site-main">
        @yield('content')
    </main>

    <footer class="site-footer">
    <p>© {{ date('2026') }} Album Photo · Projet de Valentin et Léo</p>
</footer>