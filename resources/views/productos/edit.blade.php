<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Header Aquí -->
    <!-- Header End -->

    <!-- Formulario de Editar Producto -->
    <section class="demo-section pt-4 pb-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <h3 class="text-center mb-4">Editar Producto</h3>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required placeholder="Ingresa el nombre del producto">
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion', $producto->descripcion) }}" required placeholder="Ingresa la descripción del producto">
                        </div>

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:</label>
                            <input type="number" class="form-control" id="precio" name="precio" step="0.01" value="{{ old('precio', $producto->precio) }}" required placeholder="Ingresa el precio del producto">
                        </div>

                        <div class="mb-3">
                            <label for="porcentaje_descuento" class="form-label">Porcentaje de Descuento:</label>
                            <input type="number" class="form-control" id="porcentaje_descuento" name="porcentaje_descuento" step="0.01" value="{{ old('porcentaje_descuento', $producto->porcentaje_descuento) }}" required placeholder="Ingresa el porcentaje de descuento">
                        </div>

                        <div class="button-group">
                            <button type="submit" class="btn btn-primary btn-lg w-100">Actualizar Producto</button>
                            <a href="{{ route('lista.productos') }}" class="btn btn-secondary btn-lg w-100">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin del Formulario -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>