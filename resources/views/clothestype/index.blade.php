<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clothes Type</title>
    <link rel="stylesheet" href="{{ asset('./css/index.css') }}">
</head>

<body>
    <h1><a href="./newClothesType">Crear nuevo tipo de ropa</a></h1>
    <ul>
        @foreach ($clothestype as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
</body>

</html>
