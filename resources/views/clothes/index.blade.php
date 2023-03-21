<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothes</title>
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
</head>

<body>
    <header>
        <h1>Ropa </h1>
        <button> <a href="/newClothes"> Nueva Ropa </a></button>
    </header>
    <div class="container">
        <table>
            <tr>
                <td> <b>Image</b> </td>
                <td> <b>Id</b> </td>
                <td> <b>Talla</b> </td>
                <td> <b>Color</b> </td>
                <td> <b>Precio</b> </td>
                <td> <b>Genero</b> </td>
                <td> <b>Acciones</b> </td>
            </tr>
            @foreach ($clothes as $item)
                <tr>
                    <td><img src="{{ $item->image }}" alt="" srcset=""></td>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->size }}</td>
                    <td>{{ $item->color }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->gender }}</td>
                    <td><a href="/clothes/delete/{{ $item->id }}"">Eliminar</a> / <a
                            href="/clothes/edit/{{ $item->id }}">Modificar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
