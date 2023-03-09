<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Clothes</title>
</head>

<body>
    <h1>Clothes</h1>
    <h2>New Clothes</h2>

    <form action="./saveClothes" method="GET">
        <label for="size">Size: </label>
        <input type="text" name="size"> <br> <br>

        <label for="color"> Color: </label>
        <select name="color" id="color">
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
        </select> <br> <br>

        <label for="price">Price</label>
        <input type="number" name="price"> <br><br>

        <label for="gender">Gender</label>
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select> <br> <br>

        <button type="submit">Create</button>
    </form>
</body>

</html>
