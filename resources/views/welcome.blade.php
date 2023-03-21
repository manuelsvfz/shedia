<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shedia | we're going to stole your f*cking money</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">


    <link rel="stylesheet" href="{{ asset('./css/navigationBar.css') }}">
</head>
@include('layouts.testnavigation')

<body class="antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <!-- -->


        {{-- @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->name }}</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}

        <div class="container">
            <div class="title">Shedia</div>

            <figure>
                <a href="./home/female">
                    <img src="https://static.bershka.net/4/static/itxwebstandard/images/worldwide/D_index_woman.jpg?t=20230223021712"
                        alt="Mujer">
                </a>
                <figcaption>
                    <h1>Mujer</h1>
                </figcaption>
            </figure>

            <figure>
                <a href="./home/male">
                    <img src="https://static.bershka.net/4/static/itxwebstandard/images/worldwide/D_index_man.jpg?t=20230223021712"
                        alt="Hombre">
                </a>
                <figcaption>
                    <h1>Hombre</h1>
                </figcaption>
            </figure>

        </div>
    </div>

    <x-footer />
</body>

</html>
