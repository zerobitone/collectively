<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Collectively Blog</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
<div id="app">
    <app-component></app-component>
</div>

</body>
</html>
