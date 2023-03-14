<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/indexCrud.css') }}">
    <title>Eliminar Usuario</title>
</head>

<body>

    <h1>Eliminar Usuario</h1>
    <p>¿Estas seguro de eliminar el usuario {{ $user->name }}?</p>
    <form action="/deleteUser/{{ $user->id }}" method="GET">
        <button type="submit">Eliminar</button>
    </form>
    <button> <a href="/users">Cancelar</a></button>

</body>

</html>
