<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Clothes</title>
</head>

<body>
    @include('layouts.testnavigation')
    <h1>Clothes</h1>
    <h2>New Clothes</h2>

    <form action="./saveClothes" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="image">Image</label>

        <input type="file" name="image"> <br><br>

        <label for="size">Size: </label>
        <select name="size" id="size">
            <option value="xs">XS</option>
            <option value="s">S</option>
            <option value="m">M</option>
            <option value="l">L</option>
            <option value="xl">XL</option>
            <option value="xxl">XXL</option>
            <option value="xxxl">XXXL</option>
            <option value="xxxxl">XXXXL</option>
            <option value="34">34</option>
            <option value="36">36</option>
            <option value="38">38</option>
            <option value="40">40</option>
            <option value="42">42</option>
            <option value="44">44</option>
            <option value="46">46</option>
        </select> <br> <br>

        <label for="color"> Color: </label>
        <select name="color" id="color">
            <option value="Rojo">Rojo</option>
            <option value="Naranja">Naranja</option>
            <option value="Amarillo">Amarillo</option>
            <option value="Verde">Verde</option>
            <option value="Cian">Cian</option>
            <option value="Azul">Azul</option>
            <option value="Púrpura">Púrpura</option>
            <option value="Magenta">Magenta</option>
            <option value="Blanco">Blanco</option>
            <option value="Negro">Negro</option>
        </select> <br> <br>

        <label for="price">Price</label>
        <input type="text" name="price"> <br><br>

        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Hombre</option>
            <option value="female">Mujer</option>
        </select> <br> <br>

        <label for="clotheType_id">Tipo De Ropa</label>
        <select name="clotheType_id" id="clotheType_id">
            @foreach ($clothesType as $item)
                <option value="{{ $item->id }}">{{ $item->name }} </option>
            @endforeach
        </select> <br> <br>

        <button type="submit">Crear</button>

    </form>
</body>

</html>
