<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Bancarios</title>
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
</head>

<body>
    <header>
        <h1>Datos Bancarios </h1>
        <button> <a href="/newBankData"> Nuevo Dato bancario</a></button>
    </header>
    <div class="container">
        <table>
            <tr>
                <td> <b>Id</b> </td>
                <td> <b>Iban</b> </td>
                <td> <b>Dinero</b> </td>
                <td> <b>Acciones</b> </td>
            </tr>
            @foreach ($bankdatas as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->iban }}</td>
                    <td>{{ $item->money }}</td>
                    <td>
                        <button> <a href="/bankdata/delete/{{ $item->id }}">Eliminar</a></button>
                        <button> <a href="/bankdata/edit/{{ $item->id }}">Editar</a></button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
