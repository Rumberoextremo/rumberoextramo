<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contáctanos</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <!--Bootstarp min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Bootstarp map css-->
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
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            /* Centrar el texto del pie de página */
        }

        .footer a {
            color: #ffffff;
            text-decoration: underline;
            /* Subrayar enlaces en el pie de página */
        }

        .hero {
            background-image: url('https://via.placeholder.com/1600x400?text=Contáctanos');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            margin-bottom: 20px;
            /* Espacio debajo del héroe */
        }

        .styled-form {
            background-color: #ffffff;
            /* Fondo blanco para el formulario */
            padding: 30px;
            /* Espaciado interno */
            border-radius: 10px;
            /* Bordes redondeados */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Sombra */
        }

        .styled-form h2 {
            color: #007bff;
            /* Color del título */
        }

        .form-group label {
            font-weight: bold;
            /* Negrita para las etiquetas */
            color: #333;
            /* Color de las etiquetas */
        }

        .form-control {
            border: 1px solid #ced4da;
            /* Borde del campo */
            border-radius: 5px;
            /* Bordes redondeados */
            transition: border-color 0.3s;
            /* Transición suave para el borde */
        }

        .form-control:focus {
            border-color: #007bff;
            /* Cambia el color del borde al enfocar */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Sombra al enfocar */
        }

        .btn-primary {
            background-color: #007bff;
            /* Color de fondo */
            border: none;
            /* Sin borde */
            padding: 10px;
            /* Espaciado interno */
            border-radius: 5px;
            /* Bordes redondeados */
            transition: background-color 0.3s;
            /* Transición suave para el fondo */
        }

        .btn-primary:hover {
            background-color: #0056b3;
            /* Color de fondo al pasar el mouse */
        }
    </style>
</head>

<body>
    <!--Header Here-->
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo-menu">
                    <a href="home" class="logo">
                        <img src="assets/img/logos/logo.png" alt="img">
                    </a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="main-menu">
                    <li>
                        <a href="home">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('galery') }}">Galeria</a>
                    </li>
                    <li>
                        <a href="{{ route('nosotros') }}">Quienes Somos?</a>
                    </li>
                    <li>
                        <a href="{{ route('demo') }}">Demo</a>
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
                        <h4>
                            Formulario De Contacto
                        </h4>
                        <p class="b__space">
                            ponte en contacto con nosotros por cualquier de estos metodos y te responderemos pronto.
                        </p>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__Thumb">
                        <img src="assets/img/hosting/contact.png" alt="about-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

    <!--Contact Here-->
    <div class="contact__section pt-80">
        <div class="contact_inner">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-12">
                        <div class="contact__card__wrap">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="contact__card">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <h6>
                                            Correo Electronico
                                        </h6>
                                        <a href="#0">
                                            rumberoextremo@gmail.com
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="contact__card">
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <h6>
                                            Telefono
                                        </h6>
                                        <a href="#0">
                                            +584143806713
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="contact__card">
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <h6>
                                            Dirección
                                        </h6>
                                        <a href="#0">
                                            Caracas, Venezuela
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact End-->

        <div class="container mt-4">
            <form class="styled-form">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Tu Nombre" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="Tu Correo" required>
                </div>
                <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
            </form>
        </div>

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