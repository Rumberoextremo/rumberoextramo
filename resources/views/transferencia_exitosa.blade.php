<!-- resources/views/transferencia_exitosa.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferencia Exitosa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de incluir tu CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- Bootstrap CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .alert {
            margin-bottom: 20px;
        }
        h1 {
            color: #28a745; /* Color verde para el título */
        }
        .btn-primary {
            background-color: #007bff; /* Color del botón */
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">¡Transferencia Exitosa!</h1>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="text-center">
            <p>Su recarga se ha procesado correctamente.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al inicio</a>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Asegúrate de incluir tu JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script> <!-- Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Bootstrap JS -->
</body>
</html>
