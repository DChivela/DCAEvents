<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Mudando o tiúlo de forma dinámica -->
        <title>@yield('title')</title> 

        <!-- Fontes da aplicação (proveniente do Google) -->

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS da CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">

        <script src="/js/script.js"></script>
    </head>


    <body>
    <!-- Determinando a área do nosso conteúdo. -->
        @yield('content') 

    <footer>
        <p>Focus DC &copy; 2024</p>
    </footer>
    </body>
</html>