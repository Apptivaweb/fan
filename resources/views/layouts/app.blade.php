<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container nav">
        <div class="logo">FANGIF</div>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Calculadora</a>                
            </li>
        </ul>
    </div>
@yield('content')
<style>
    .nav{
        display: flex;
        justify-content: space-between;
        align-items: center;      
    }  

</style>
</body>
</html>