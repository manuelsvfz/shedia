<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
    <title>Eliminar Ropa</title>
</head>

<body>
    @include('layouts.testnavigation')

    <h1>Eliminar Ropa</h1>
    <p>¿Estas seguro de eliminar la ropa {{ $clothes->id }}?</p>
    <form action="/deleteClothes/{{ $clothes->id }}" method="GET">
        <button type="submit">Eliminar</button>
    </form>
    <button> <a href="/clothes">Cancelar</a></button>

</body>

</html>
