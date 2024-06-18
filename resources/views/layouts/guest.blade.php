<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="login-container">
            @include('components.front-page-info')
            <div class="right-side">
                <div class="login-header">
                    <a href="{{ route('login') }}"><img src="{{ asset('images/logo-dark.png') }}" alt="Logo" class="logo"/></a>
                    <a href="{{ route('register') }}" class="link-register link-primary">Criar conta</a>
                    <a id="theme-toggler" class="theme-toggler-mobile btn btn-sm btn-circle btn-outline"><i class="bi bi-moon-fill"></i></a>
                </div>
                <div class="right-side-content">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
