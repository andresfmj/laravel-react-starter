<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body>
        <div id="container-app"></div>
        <noscript>
            <p>Javascript es necesario para que este sitio web funcione correctamente</p>
        </noscript>
        <script src="{{ mix('/js/index.js') }}"></script>
    </body>
</html>
