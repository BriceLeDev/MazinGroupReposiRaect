<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body class="text-3xl font-bold underline">
        <h1>Laravel react mazin</h1>

        @viteReactRefresh
        @vite('resources/js/app.js')
    </body>
</html>
