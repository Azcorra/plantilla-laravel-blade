<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/component.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vegas.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nprogress/nprogress.css') }}">
    <link rel="stylesheet" href="{{ asset('css/iziToast/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    @livewireStyles
</head>
<body>
    @include('partials.menu')
    @yield('contenido')
    @include('partials.footer')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('js/toucheffects.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('js/iziToast/iziToast.min.js') }}"></script>
    @livewireScripts
    @stack('scripts')
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        // Ejecutar librería "NProgress" en los siguientes hooks de Livewire
        Livewire.hook('message.sent', (message, component) => {
            NProgress.start();
        })

        Livewire.hook('message.failed', (message, component) => {
            NProgress.done();
        })
        Livewire.hook('message.received', (message, component) => {
            NProgress.done();
        })
        Livewire.hook('message.processed', (message, component) => {
            NProgress.done();
        })
    </script>
</body>
</html>