<!-- resources/views/transferencia_exitosa.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferencia Exitosa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Asegúrate de incluir tu CSS -->
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
            <a href="{{ route('home') }}" class="btn btn-primary">Volver al inicio</a>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Asegúrate de incluir tu JS -->
</body>
</html>
