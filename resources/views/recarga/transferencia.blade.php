{{-- resources/views/recarga/transferencia.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recarga por Transferencia</title>
    <!-- Importar Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #e3f2fd;
        }
        .card {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h5 {
            color: rgb(120, 30, 229);
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .btn-primary {
            background-color: rgb(16, 79, 215);
        }
        .btn-danger {
            background-color: rgb(48, 35, 195);
        }
        .btn {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h5 class="center-align">Recarga por Transferencia <i class="fas fa-exchange-alt"></i></h5>

        <!-- Mostrar mensaje de éxito o error -->
        @if(session('success'))
            <div class="card-panel teal lighten-2 white-text center-align">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="card-panel red lighten-2 white-text center-align">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('recarga.transferencia') }}">
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
                <input type="text" id="telefono" name="telefono" required>
                <label for="telefono">Teléfono</label>
            </div>

            <div class="input-field">
                <select id="banco_emisor" name="banco_emisor" required>
                    <option value="" disabled selected>Seleccione un Banco Emisor</option>
                    @foreach($bancos as $key => $banco)
                        <option value="{{ $key }}">{{ $banco }}</option>
                    @endforeach
                </select>
                <label>Banco Emisor</label>
            </div>

            <div class="input-field">
                <select id="banco_receptor" name="banco_receptor" required>
                    <option value="" disabled selected>Seleccione un Banco Receptor</option>
                    @foreach($bancos as $key => $banco)
                        <option value="{{ $key }}">{{ $banco }}</option>
                    @endforeach
                </select>
                <label>Banco Receptor</label>
            </div>

            <div class="input-field">
                <input type="text" id="cuenta" name="cuenta" required>
                <label for="cuenta">Número de Cuenta</label>
            </div>

            <div class="input-field">
                <input type="number" id="cantidad" name="cantidad" required>
                <label for="cantidad">Cantidad a Recargar</label>
            </div>

            <div class="input-field">
                <input type="text" id="nombre_usuario" name="nombre_usuario" required>
                <label for="nombre_usuario">Nombre de Usuario</label>
            </div>

            <div class="input-field">
                <input type="date" id="fecha" name="fecha" required>
                <label for="fecha">Fecha</label>
            </div>

            <button type="submit" class="btn btn-primary">Recargar</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href = '{{ route('dashboard') }}'">Volver</button>
        </form>
    </div>

    <!-- Importar jQuery y Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>
</html>
