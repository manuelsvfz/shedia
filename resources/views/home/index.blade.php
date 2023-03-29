<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/card.css') }}">
    <title>Home</title>
</head>

<body>
    @include('layouts.testnavigation')
    <div class="containerCard">
        @foreach ($clothes as $item)
            @foreach ($clothesType as $item2)
                @if ($item->clotheType_id == $item2->id)
                    <x-producto :image="$item->image" :name="$item2->name" :idProducto="$item->id" />
                    <!--<figure>
                        <img src="{{ $item->image }}" alt="" srcset="">
                        <figcaption>{{ $item2->name }} {{ $item->color }}</figcaption>
                    </figure>-->
                @endif
            @endforeach
        @endforeach
    </div>
    <footer>
        <button class="navigationButton"><a href="../">Volver atrás</a></button>
    </footer>

    <x-footer />
</body>

</html>
