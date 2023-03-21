<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/producto.css') }}">
    <title>Ropa</title>
</head>

<body>
    @include('layouts.testnavigation')
    <div class="container">
        <img src="{{ $clothes->image }}" alt="" srcset="">

        <h1>{{ $name }}</h1>
        <p>{{ $clothes->price }}</p>
        <p>{{ $clothes->color }}</p>
        <p>{{ $clothes->size }}</p>
        <p>{{ $clothes->gender }}</p>
    </div>

    @if (!$thisFavorites)
        <button> <a href="/favorites/{{ $clothes->id }}"> Añadir a favoritos</a> </button>
    @else
        <button> <a href="/favoritesDelete/{{ $clothes->id }}"> Quitar de favoritos</a> </button>
    @endif


    @if (!$thisShoppinCart)
        <button> <a href="/shoppinCart/{{ $clothes->id }}"> Añadir al carrito</a> </button>
    @else
        <button> <a href="/shoppinCartDelete/{{ $clothes->id }}"> Quitar del carrito</a> </button>
    @endif

</body>

</html>
