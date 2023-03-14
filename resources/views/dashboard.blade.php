<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('./css/dashboard.css') }}">
</head>

<body>

    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            @if (Auth::user()->isAdmin)
                <button><a href="./clothes">Gestionar Ropa</a></button> <br>
                <button><a href="./clothestype">Gestionar Tipo de Ropa</a></button> <br>
                <button><a href="./users">Gestionar Usuarios</a></button> <br>
                <button><a href="./discounts">Gestionar Descuentos</a></button> <br>
                <button><a href="./bankdata">Gestionar Datos Bancarios</a></button> <br>
            @else
                <button><a href="./favorites">Ver Favoritos</a></button> <br>
                <button><a href="./shoppinCart">Ver Carrito</a></button> <br>
            @endif

        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="container">
                            <button><a href="/">Volver a Inicio</a></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </x-app-layout>

</body>

</html>
