<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('/style.css')}}">
        <script src="https://kit.fontawesome.com/44f406f7d6.js" crossorigin="anonymous"></script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js','resources/js/success.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center m-0 sm:pt-0 bg-gray-100">
            @guest
             <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current" />
                </a>
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>   
            @endguest
            @auth
            <div class="w-full h-full bg_pink">
                {{ $create }}
            </div>
                
            @endauth

        </div>
    </body>
</html>
