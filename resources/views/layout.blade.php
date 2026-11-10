<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Album Photo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>
<body>
    <header>
        <a href="/albums">Mes albums</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>