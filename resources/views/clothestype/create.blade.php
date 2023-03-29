<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New ClothesType</title>
</head>

<body>
    @include('layouts.testnavigation')

    <h1>Clothes Type</h1>
    <h2>New Clothes Type</h2>

    <form action="./saveClothesType" method="GET">
        <label for="name">Name: </label>
        <input type="text" name="name"> <br> <br>
        <button type="submit">Create</button>
    </form>
</body>

</html>
