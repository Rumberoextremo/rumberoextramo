<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo</title>
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
                        <h4>Afiliate a nuestra app o se parte de nuestros aliados</h4>
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

    <!--Botones y Video de Demostración-->
    <section class="demo-section pt-120 pb-120">
        <div class="container text-center">
            <a href="{{ route('aliado') }}" class="btn btn-primary mx-2">Quiero Ser un Aliado</a>
            <a href="{{ route('afiliado') }}" class="btn btn-secondary mx-2">Quiero Afiliarme</a>
            <div class="mt-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/THYr0zDXECs?si=I6rMn64ROkGHcOWP"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
    <!--Fin de Botones y Video-->

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