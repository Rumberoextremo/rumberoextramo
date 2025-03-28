<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Producto</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <!-- Bootstrap min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Otros estilos CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Aquí -->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="assets/img/logos/logo.png" alt="Rumbero Extremo Logo">
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Formulario de Agregar Producto -->
    <section class="demo-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('productos.store') }}" method="POST" class="bg-light p-4 rounded shadow">
                        @csrf
                        <h1 class="text-center">Agregar Productos</h1>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <input type="text" class="form-control form-control-lg" id="descripcion" name="descripcion" required placeholder="Ingresa la descripción del producto">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio:</label>
                            <input type="number" class="form-control form-control-lg" id="precio" name="precio" step="0.01" required placeholder="Ingresa el precio del producto">
                        </div>
                        <div class="mb-3">
                            <label for="porcentaje" class="form-label">Porcentaje:</label>
                            <input type="number" class="form-control form-control-lg" id="porcentaje" name="porcentaje" step="0.01" required placeholder="Ingresa el porcentaje">
                        </div>
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha:</label>
                            <input type="date" class="form-control form-control-lg" id="fecha" name="fecha" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg w-100">Agregar Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin del Formulario -->

    <!-- Footer Aquí -->
    <footer class="footer-section section-bg pt-120">
        <div class="container">
            <div class="footer-bottom">
                <p>&copy; 2024 Rumbero Extremo | Todos los derechos reservados</p>
                <ul class="footer-bottom-link">
                    <li><a href="{{ route('policy') }}">Políticas de Privacidad</a></li>
                    <li><a href="{{ route('terms') }}">Términos & Condiciones</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>