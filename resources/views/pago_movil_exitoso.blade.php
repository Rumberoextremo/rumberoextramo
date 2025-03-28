<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8f5e9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Arial', sans-serif;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            color: #4caf50;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            color: #333;
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .btn {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
    <title>Pago Móvil y Transferencias Exitosos</title>
</head>
<body>
    <div class="container">
        <h1>Pago Exitoso</h1>
        <p>Tu recarga ha sido procesada con éxito.</p>
        <a href="{{ url('/dashboard') }}" class="btn">Volver a la página principal</a>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>