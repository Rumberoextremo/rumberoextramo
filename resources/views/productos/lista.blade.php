<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Productos</title>
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Aquí -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="{{ route('dashboard') }}" class="logo">
                        <img src="assets/img/logos/logo.png" alt="Rumbero Extremo Logo">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Lista de Productos -->
    <section class="demo-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h3 class="text-center mb-4">Lista de Productos</h3>
                    <table class="table table-bordered bg-light">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre del Producto</th>
                                <th>Categoría</th>
                                <th>Subcategoría</th>
                                <th>Precio</th>
                                <th>Descuento (%)</th>
                                <th>Aliado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre_producto }}</td>
                                <td>{{ $producto->categoria }}</td>
                                <td>{{ $producto->subcategoria }}</td>
                                <td>${{ number_format($producto->precio, 2) }}</td>
                                <td>{{ $producto->descuento }}%</td>
                                <td>{{ $producto->aliado }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm me-2">Editar</a>
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm me-2">Eliminar</button>
                                        </form>
                                        <a href="{{ route('productos.create') }}" class="btn btn-secondary btn-sm">Agregar Nuevo Producto</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin de la Lista de Productos -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>