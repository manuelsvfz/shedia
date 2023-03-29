<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
</head>

<body>
    @include('layouts.testnavigation')
    <h1>User</h1>
    <h2>Edit User</h2>

    <form action="/editUser" method="POST">
        @csrf
        @method('PUT')
        <input hidden name="id" value="{{ $user->id }}"></input>
        <label for="name">Name: </label>
        <input type="text" name="name" value="{{ $user->name }}"> <br> <br>

        <label for="email">Email: </label>
        <input type="text" name="email" value="{{ $user->email }}"> <br> <br>

        <label for="password">Password: </label>
        <input type="text" name="password" placeholder="Vacio para no cambiar"> <br> <br>

        <label for="isAdmin">isAdmin: </label>
        <select name="isAdmin">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select> <br> <br>

        <input hidden name="bankData_id" value="null"></input>
        <button type="submit">Edit</button>
    </form>
</body>

</html>
