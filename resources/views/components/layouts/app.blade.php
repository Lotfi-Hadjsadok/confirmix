<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-gray-50 dark:bg-neutral-900">
    <x-header></x-header>
    <x-sidebar></x-sidebar>
    <main class="pl-14">
        {{ $slot }}
    </main>
</body>

</html>
