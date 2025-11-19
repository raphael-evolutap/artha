<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Artha</title>
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
