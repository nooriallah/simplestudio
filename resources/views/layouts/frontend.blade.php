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
    @include('layouts.header')


    <main>
        {{ $slot }}
    </main>

    {{-- Footer of website --}}
    @include('layouts.footer')
    

    @livewireScripts
</body>

<script>
    // Projects section design
    document.querySelectorAll('.project__wrapper').forEach(wrapper => {
        const projects = wrapper.querySelectorAll('.small__project, .big__project');

        projects.forEach(project => {
            project.addEventListener('mouseenter', () => {
                projects.forEach(p => {
                    if (p === project) {
                        p.style.flexBasis = '70%';
                    } else {
                        p.style.flexBasis = '30%';
                    }
                });
            });
        });
    });
</script>

</html>
