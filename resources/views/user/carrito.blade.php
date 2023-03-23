<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('./css/carrito.css') }}">
    <title>Carrito</title>
</head>

<body>
    @include('layouts.testnavigation')
    <h1>Carrito</h1>
    @if (sizeof($clothes) > 0)
        <table>
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Tipo</th>
                    <th>Color</th>
                    <th>Talla</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clothes as $item)
                    <tr>
                        <td class="image">
                            <img src="{{ $item->image }}" alt="" srcset="">
                        </td>
                        @foreach ($types as $item2)
                            @if ($item->clotheType_id == $item2->id)
                                <td>{{ $item2->name }}</td>
                            @endif
                        @endforeach
                        <td>{{ $item->color }}</td>
                        <td>{{ $item->size }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <select name="cantidad" id="cantidad" onchange="update(this)">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </td>
                        <td>
                            <p class="Total"></p>
                        </td>
                        <td>
                            <button><a href="/shoppinCartDelete/{{ $item->id }}">Eliminar</a></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="totalContainer">
            <p id="totalFinal"></p>
            <div class="botones">
                <button class="navigationButton">Comprar</button>
                <button class="navigationButton"><a href="/">Volver a Inicio</a></button>
            </div>
        </div>
    @else
        <h1>No hay nada añadido al carrito</h1>
        <button class="navigationButton"><a href="../">Volver a Inicio</a></button>
    @endif






    <script>
        let elements = document.querySelectorAll('.Total');
        elements.forEach(element => update(element));

        function update(e) {
            let element = e.parentElement.parentElement;
            let price = element.children[4].innerText;
            let cantidad = element.children[5].children[0].value;
            let total = element.children[6].children[0];
            let suma = (Number(price) * Number(cantidad)).toFixed(2);
            total.innerText = suma + "€";
            functionTotal();
        }

        function functionTotal() {
            let totales = document.querySelectorAll('.Total');
            let total = document.querySelectorAll('#totalFinal')[0];

            let suma = 0;
            totales.forEach(element => {
                suma += Number(element.innerText.split("€")[0]);
            });
            total.innerText = "Total: " + suma.toFixed(2) + "€";
        }

        functionTotal();
    </script>
</body>

</html>
