{{-- resources/views/recarga/divisas.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recarga por Divisas</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .card {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h5 {
            text-align: center;
            color: #007bff;
            margin-bottom: 20px;
        }
        .btn {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="card">
    <h5>Recarga por Divisas <i class="fas fa-exchange-alt"></i></h5>

    <!-- Mostrar mensaje de éxito o error -->
    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('recarga.divisas') }}">
        @csrf
        
        <div class="input-field">
            <input type="text" id="nombre" name="nombre" required>
            <label for="nombre">Nombre</label>
        </div>

        <div class="input-field">
            <input type="text" id="apellido" name="apellido" required>
            <label for="apellido">Apellido</label>
        </div>

        <div class="input-field">
            <input type="text" id="cedula" name="cedula" required>
            <label for="cedula">Cédula</label>
        </div>

        <div class="input-field">
            <input type="text" id="direccion" name="direccion" required>
            <label for="direccion">Dirección</label>
        </div>

        <div class="input-field">
            <input type="text" id="telefono" name="telefono" required>
            <label for="telefono">Teléfono</label>
        </div>

        <div class="input-field">
            <input type="number" id="cantidad" name="cantidad" required>
            <label for="cantidad">Cantidad a Recargar</label>
        </div>

        <div class="input-field">
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            <label for="nombre_usuario">Nombre de Usuario</label>
        </div>

        <button type="submit" class="btn btn-primary">Recargar</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href = '{{ route('dashboard') }}'">Volver</button>
    </form>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        M.FormSelect.init(elems);
    });
</script>

</body>
</html>
