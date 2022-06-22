<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    @livewireStyles
        <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>

    @includeUnless(request()->routeIs(['login', 'register', 'password.request']), 'layouts.navigation')

        {{ $slot }}

    @includeUnless(request()->routeIs(['login', 'register', 'password.request']), 'layouts.footer')

    <livewire:signup-modal /> 
    <livewire:login-modal /> 
    @livewireScripts
    {{-- <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> --}}
</body>

</html>
