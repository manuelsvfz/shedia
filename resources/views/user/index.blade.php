<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
</head>

<body>
    <header>
        <h1>Usuarios </h1>
        <button> <a href="/newUser"> Nuevo usuario</a></button>
    </header>
    <div class="container">
        <table>
            <tr>
                <td> <b>Id</b> </td>
                <td> <b>Name</b> </td>
                <td> <b>Email</b> </td>
                <td> <b>isAdmin</b> </td>
                <td> <b>BankData_id</b> </td>
                <td> <b>Acciones</b> </td>
            </tr>
            @foreach ($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->isAdmin ? 'true' : 'false' }}</td>
                    <td>{{ $item->bankData_id }}</td>
                    <td>
                        <button> <a href="/users/delete/{{ $item->id }}">Eliminar</a></button>
                        <button> <a href="/users/edit/{{ $item->id }}">Editar</a></button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
