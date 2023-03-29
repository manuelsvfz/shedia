<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit ClothesType</title>
</head>

<body>
    @include('layouts.testnavigation')

    <h1>Clothes Type</h1>
    <h2>Edit Clothes Type</h2>

    <form action="/editClothesType" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ $clothesType->name }}"> <br> <br>
        <button type="submit">Edit</button>
        <input type="number"name="id" id="id" hidden value="{{ $clothesType->id }}">
    </form>
</body>

</html>
