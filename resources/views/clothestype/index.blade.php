<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothes Type</title>
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
</head>

<body>
    <header>
        <h1>Tipo De Ropa </h1>
        <button> <a href="/newClothesType"> Nueva Tipo de Ropa </a></button>
    </header>
    <div class="container">
        <table>
            <tr>
                <td> <b>Id</b> </td>
                <td> <b>Name</b> </td>
                <td> <b>Acciones</b> </td>
            </tr>
            @foreach ($clothestype as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td><a href="/clothesType/delete/{{ $item->id }}"">Eliminar</a> / <a
                            href="/clothesType/edit/{{ $item->id }}">Modificar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
