<!DOCTYPE html>
<html>

<head>
    <title>Factura {{ $factura->numero }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        .factura {
            margin: 20px auto;
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .details,
        .cliente,
        .productos,
        .resumen {
            margin-top: 20px;
            border-top: 1px solid #ccc;
            padding-top: 10px;
        }

        .cliente p,
        .productos p {
            margin: 5px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .total {
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="factura">
        <h1>Factura #{{ $factura->numero }}</h1>
        <p>Fecha: {{ $factura->fecha }}</p>
        <p>Monto Total: ${{ number_format($factura->monto, 2) }}</p>

        <div class="cliente">
            <h2>Información del Cliente</h2>
            <p>Nombre: {{ $factura->cliente->nombre }}</p>
            <p>Dirección: {{ $factura->cliente->direccion }}</p>
            <p>Email: {{ $factura->cliente->email }}</p>
        </div>

        <div class="productos">
            <h2>Productos</h2>
            <table>
                <tr>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                </tr>
                @foreach($factura->obtenerDetallesProductos() as $detalle)
                <tr>
                    <td>{{ $detalle['nombre'] }}</td>
                    <td>{{ $detalle['cantidad'] }}</td>
                    <td>${{ number_format($detalle['precio'], 2) }}</td>
                    <td>${{ number_format($detalle['total'], 2) }}</td>
                </tr>
                @endforeach¿
            </table>
        </div>

        <div class="resumen">
            <h2>Resumen</h2>
            <p class="total">Total a Pagar: ${{ number_format($factura->monto, 2) }}</p>
        </div>
    </div>
</body>

</html>