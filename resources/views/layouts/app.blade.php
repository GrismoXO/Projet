<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yieid('meta-description', 'Description par défaut si non spécifiée')">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://kit.fontawesome.com/44f406f7d6.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/style.css', 'resources/js/btnup.js', 'resources/js/nav.js', 'resources/js/navHome.js', 'resources/js/success.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <div class="rdv">
                <a href="https://romain00qs.setmore.com/romainpeixoto" class="flex flex-col justify-center p-2 mt-4 kalam text-xl btn_rdv">
                    <i class="fa-solid fa-calendar-days "></i>
                </a>                
            </div>
            <!-- Page Heading -->
            @if(request()->is('/'))
            <header class="bg-white shadow">
                @include('layouts.navigation_home')
                <div class="mx-auto pt-6 px-4 sm:px-6 h-full flex flex-col justify-center items-center gift_800">
                    {{ $header }}
                </div>
            </header>
        @else
            <header class="bg-white shadow">
                @include('layouts.navigation')
                <div class="mx-auto pt-6 px-4 sm:px-6 h-full flex flex-col justify-center gift_800">
                    {{ $header }}
                </div>
            </header>
        @endif

            <!-- Page Content -->
            <main>
                <div>{{ $slot }}</div>
                <div class="flex justify-end fixed z-50 bottom-5 right-5 "><a href="" class="pr-4 btn_top hover hidden"><i class="fa-solid fa-circle-arrow-up text-5xl z-50 text_pink  hover_pink"></i></a></div>
            </main>
            <x-footer/>    
        </div>
    </body>
</html>
