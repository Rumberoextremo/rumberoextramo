<!-- resources/views/facturas/pdf_single.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura {{ $factura->numero }}</title>
    <style>
        /* Estilos para el PDF */
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Factura {{ $factura->numero }}</h1>
        <p>Fecha: {{ $factura->fecha->format('d/m/Y') }}</p>
        <p>Cliente: {{ $factura->cliente->nombre }}</p>
    </div>
    <table>
        <thead>
            <tr>
                <th>Descripción</th>
                <th>Monto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Factura {{ $factura->numero }}</td>
                <td>{{ number_format($factura->monto, 2) }} $</td>
            </tr>
            <!-- Puedes agregar más detalles de la factura aquí -->
        </tbody>
    </table>
</body>
</html>
