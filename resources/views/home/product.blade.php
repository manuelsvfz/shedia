<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/producto.css') }}">
    <title>Ropa</title>
</head>

<body>
    @include('layouts.testnavigation')

    <div class="containerMain">
        <img src="{{ $clothes->image }}" alt="" srcset="">
        <div class="container">
            <h1>{{ $name }}</h1>
            <p>{{ $clothes->price }}</p>
            <p>{{ $clothes->color }}</p>
            <p>{{ $clothes->size }}</p>
            <p>{{ $clothes->gender }}</p>
            @if (Auth::user())
                <div class="containerMain">
                    @if (!$thisFavorites)
                        <a class="favorites" href="/favorites/{{ $clothes->id }}"> Añadir a favoritos</a>
                    @else
                        <a class="favorites" href="/favoritesDelete/{{ $clothes->id }}"> Quitar de favoritos</a>
                    @endif
                    &nbsp

                    @if (!$thisShoppinCart)
                        <a class="shoppinCart" href="/shoppinCart/{{ $clothes->id }}"> Añadir al carrito</a>
                    @else
                        <a class="shoppinCart" href="/shoppinCartDelete/{{ $clothes->id }}"> Quitar del carrito</a>
                    @endif
                </div>
            @endif
        </div>
    </div>


    <div class="containerMain">
        <a class="navegables" href="/home/{{ $clothes->gender }}">Volver atrás</a>
        @if (Auth::user())
            <a class="navegables" href="/user/Favorites">Ir a favoritos</a>
        @endif

    </div>
</body>

</html>
