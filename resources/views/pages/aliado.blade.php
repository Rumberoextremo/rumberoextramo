<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <!--Bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Bootstrap map css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css.map">
    <!--Odometer css-->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!--Owl Carousel css-->
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <!--Owl Carousel Theme css-->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--Animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--Owl Nice select css-->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--main css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!--Header Here-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="assets/img/logos/logo.png" alt="Rumbero Extremo Logo">
                    </a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="{{ route('nosotros') }}">Quienes Somos?</a>
                    </li>
                    <li>
                        <a href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    <li>
                        <a href="{{ route('galery') }}">Galeria</a>
                    </li>

                    <!-- Botón de cerrar sesión -->
                    <li>
                        <form action="{{ url('/logout')}}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!--Header End-->

    <!--Banner Start-->
    <section class="breadcumnd__banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__content">
                        <h6>Quieres Formar Parte de Rumbero Extremo?</h6>
                        <h4>Conviertete en nuestro Aliado</h4>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__Thumb">
                        <img src="assets/img/hosting/pricing.png" alt="about-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

    <!--Formulario de Aliado-->
    <section class="demo-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('aliado.store') }}" method="POST" class="bg-light p-4 rounded shadow">
                        @csrf
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" required placeholder="Ingresa tu nombre completo">
                        </div>

                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control form-control-lg" id="apellido" name="apellido" required placeholder="Ingresa tu apellido">
                        </div>

                        <div class="mb-3">
                            <label for="rif" class="form-label">RIF de la Empresa</label>
                            <input type="text" class="form-control form-control-lg" id="rif" name="rif" required placeholder="Ingresa el RIF de la empresa">
                        </div>

                        <div class="mb-3">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control form-control-lg" id="direccion" name="direccion" required placeholder="Ingresa la dirección completa">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control form-control-lg" id="email" name="email" required placeholder="ejemplo@correo.com">
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" class="form-control form-control-lg" id="telefono" name="telefono" required placeholder="Ingresa tu número de teléfono">
                        </div>

                        <div class="mb-3">
                            <label for="nombre_empresa" class="form-label">Nombre de la Empresa</label>
                            <input type="text" class="form-control form-control-lg" id="nombre_empresa" name="nombre_empresa" required placeholder="Nombre de tu empresa">
                        </div>

                        <div class="mb-3">
                            <label for="sector" class="form-label">Sector de Negocio</label>
                            <input type="text" class="form-control form-control-lg" id="sector" name="sector" required placeholder="Ingresa el sector de negocio">
                        </div>

                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control form-control-lg" id="mensaje" name="mensaje" rows="4" required placeholder="Escribe por qué quieres aliarte..."></textarea>
                        </div>

                        <a href="{{ route('gracias') }}" class="btn btn-primary btn-lg w-100" role="button" onclick="submitForm();">Enviar Solicitud</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Fin del Formulario-->

    <!--Footer Here-->
    <footer class="footer-section section-bg pt-120">
        <div class="container">
            <div class="footer-top pb-120">
                <div class="row g-4">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ">
                        <div class="widget-items">
                            <div class="footer-head">
                                <a href="{{ route('home') }}" class="logo">
                                    <img src="assets/img/logos/logo.png" alt="Rumbero Extremo Logo">
                                </a>
                            </div>
                            <div class="content-area">
                                <p>
                                    Es una aplicación de esparcimiento social dedicado principalmente para jovenes adultos venezolanos.
                                </p>
                                <ul class="social">
                                    <li>
                                        <a href="#" class="icon">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon">
                                            <i class="fa-brands fa-tiktok"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="icon">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 ">
                        <div class="widget-items">
                            <div class="footer-head">
                                <h5 class="title">
                                    Información
                                </h5>
                            </div>
                            <div class="content-area">
                                <ul class="quick-link">
                                    <li>
                                        <p>Dirección: Centro Empresarial Del Este, Chacao, Estado Miranda</p>
                                    </li>
                                    <li>
                                        <p>CEO: Julio Fermín</p>
                                    </li>
                                    <li>
                                        <p>CEO: Andreina Romero</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                        <div class="widget-items">
                            <div class="footer-head">
                                <h5 class="title">
                                    Contacto
                                </h5>
                            </div>
                            <div class="content-area">
                                <ul class="contact">
                                    <li>
                                        <div class="phone-icon">
                                            <img src="assets/img/footer/email.png" alt="email">
                                        </div>
                                        <a href="#0" class="email-part">
                                            <span>Correo:</span>
                                            rumberoextremo@gmail.com
                                        </a>
                                    </li>
                                    <li>
                                        <div class="phone-icon">
                                            <img src="assets/img/footer/phone.png" alt="phone">
                                        </div>
                                        <a href="#0" class="email-part">
                                            <span>Telefono:</span>
                                            +58 412-583-1128
                                        </a>
                                    </li>
                                    <li>
                                        <div class="phone-icon">
                                            <img src="assets/img/footer/phone.png" alt="phone">
                                        </div>
                                        <a href="#0" class="email-part">
                                            <span>Telefono:</span>
                                            +58 424-165-7737
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>
                    Copyright &copy; 2024 Rumbero Extremo | Todos los derechos reservados
                </p>
                <ul class="footer-bottom-link">
                    <li>
                        <a href="{{ route('policy') }}">
                            Politicas de Privacidad
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('terms') }}">
                            Terminos & Condiciones
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>