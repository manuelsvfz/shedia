<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discount</title>
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
</head>

<body>
    <header>
        <h1>Descuentos </h1>
        <button> <a href="/newDiscount"> Nuevo Descuento </a></button>
    </header>
    <div class="container">
        <table>
            <tr>
                <td> <b>Id</b> </td>
                <td> <b>Name</b> </td>
                <td> <b>Porcentaje Descuento</b> </td>
                <td> <b>Acciones</b> </td>
            </tr>
            @foreach ($discounts as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->percentageDiscount }}</td>
                    <td><a href="/discount/delete/{{ $item->id }}"">Eliminar</a> / <a
                            href="/discount/edit/{{ $item->id }}">Modificar</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
