<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
    <title>Eliminar Tipo de Ropa</title>
</head>

<body>
    @include('layouts.testnavigation')

    <h1>Eliminar Tipo Ropa</h1>
    <p>¿Estas seguro de eliminar el tipo de ropa {{ $clothesType->name }}?</p>
    <form action="/deleteClothesType/{{ $clothesType->id }}" method="GET">
        <button type="submit">Eliminar</button>
    </form>
    <button> <a href="/clothesType">Cancelar</a></button>

</body>

</html>
