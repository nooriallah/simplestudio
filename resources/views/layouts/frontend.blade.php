<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>

    {{-- Fonts --}}
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    {{-- Header of website --}}
    <x-layouts::front.header />


    <main>
        {{ $slot }}
    </main>

    {{-- Footer of website --}}
    <x-layouts::front.footer />


    @livewireScripts
</body>


</html>
