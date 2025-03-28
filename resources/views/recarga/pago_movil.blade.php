<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago Móvil</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            font-family: 'Arial', sans-serif;
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
    <h5>Pago Móvil <i class="fas fa-mobile-alt"></i></h5>

    <form id="form-pago-movil" method="POST" action="{{ route('recarga.movil.procesar') }}">
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
            <select id="banco_emisor" name="banco_emisor" required>
                <option value="" disabled selected>Banco Emisor</option>
                @foreach ($bancos as $banco)
                    <option value="{{ $banco['id'] }}">{{ $banco['nombre'] }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-field">
            <select id="banco_receptor" name="banco_receptor" required>
                <option value="" disabled selected>Banco Receptor</option>
                @foreach ($bancos as $banco)
                    <option value="{{ $banco['id'] }}">{{ $banco['nombre'] }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-field">
            <input type="text" id="telefono_afiliado" name="telefono_afiliado" required>
            <label for="telefono_afiliado">Teléfono Afiliado</label>
        </div>

        <div class="input-field">
            <input type="number" id="cantidad" name="cantidad" required>
            <label for="cantidad">Cantidad a Pagar</label>
        </div>

        <div class="input-field">
            <input type="text" id="nombre_usuario" name="nombre_usuario" required>
            <label for="nombre_usuario">Nombre de Usuario</label>
        </div>

        <div class="input-field">
            <input type="date" id="fecha" name="fecha" required>
            <label for="fecha">Fecha</label>
        </div>

        <button type="submit" class="btn btn-primary">Pagar</button>
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