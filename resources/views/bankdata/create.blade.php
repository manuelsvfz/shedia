<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Dato Bancario</title>
</head>

<body>
    <h1>Dato Bancario</h1>
    <h2>Nuevo Dato Bancario</h2>

    <form action="./saveBankData" method="GET">
        <label for="iban">Iban: </label>
        <input type="text" name="iban"> <br> <br>

        <label for="money">Dinero : </label>
        <input type="text" name="money"> <br> <br>

        <button type="submit">Create</button>
    </form>
</body>

</html>
