<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Descuento</title>
</head>

<body>
    @include('layouts.testnavigation')
    <h1>Descuento</h1>
    <h2>Nuevo Descuento</h2>

    <form action="./saveDisccount" method="GET">
        <label for="name">Name: </label>
        <input type="text" name="name"> <br> <br>

        <label for="percentageDiscount">Porrcentaje descuento: </label>
        <input type="number" name="percentageDiscount" max="100"> <br> <br>

        <button type="submit">Create</button>
    </form>
</body>

</html>
