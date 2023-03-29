<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Discount</title>
</head>

<body>
    @include('layouts.testnavigation')

    <h1>Discount</h1>
    <h2>Edit Discount</h2>

    <form action="/editDiscount" method="POST">
        @csrf
        @method('PUT')
        <input type="number" value="{{ $discount->id }}" hidden name="id">
        <label for="name" id="name">Name: </label>
        <input type="text" name="name" id="name" value="{{ $discount->name }}"> <br> <br>

        <label for="percentageDiscount" id="percentageDiscount">Percentage Discount:</label>
        <input type="number" name="percentageDiscount" id="percentageDiscount"
            value="{{ $discount->percentageDiscount }}"> <br> <br>

        <button type="submit">Edit</button>
    </form>
</body>

</html>
