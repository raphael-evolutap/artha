<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Artha</title>
    <meta name="apple-mobile-web-app-title" content="Artha">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
</head>

<body class="min-h-screen bg-neutral-200 overflow-x-hidden">
    <x-header />
    <x-about />
    <x-quem-somos />
    <x-cards />
    <x-features />
    <x-services />
    <x-footer />
    @fluxScripts
</body>

</html>
