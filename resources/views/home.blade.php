<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rumbero Extremo</title>
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- Header Here -->
    <header class="header-section home__header border__bottom">
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
                    <li><a href="{{ route('nosotros') }}">Quienes Somos?</a></li>
                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    @if(auth()->user() && (auth()->user()->hasRole('admin') || auth()->user()->hasRole('aliado') || auth()->user()->hasRole('punto')))
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    @endif

                    <li>
                        <a href="#0">Paginas <i class="fas fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li class="subtwohober">
                                <a href="{{ route('galery') }}">
                                    <span class="icon"><i class="fa-brands fa-audible"></i></span>
                                    <span>Galeria</span>
                                </a>
                            </li>
                            <li class="subtwohober">
                                <a href="{{ route('demo') }}">
                                    <span class="icon"><i class="fa-solid fa-sitemap"></i></span>
                                    <span>Demo</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Opción de Login -->
                    @if(!auth()->user())
                    <li>
                        <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                    </li>
                    @endif

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
    <!-- Header End -->

    <!-- Banner Start -->
    <section class="home__section">
        <div class="home__items">
            <div class="container">
                <div class="row align-items-center justify-content-between flex-row-reverse">
                    <div class="col-xl-6 col-lg-6">
                        <div class="home__content">
                            <h2>
                                Aplicación de esparcimiento social
                            </h2>
                            <p>
                                La aplicación ideal para los jovenes venezolanos, diversion, entretenimiento y mucho mas !.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="home__thumb">
                            <img src="assets/img/home/rumberoextremo.gif" alt="home" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="h__bottom">
                <img src="assets/img/home/h-bottom.png" alt="h-img">
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!--Feature Here-->
    <section class="home__feature pb-80">
        <div class="container">
            <div class="feature__wrap">
                <div class="row g-4">
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="home__feature__items">
                            <div class="thumb">
                                <img src="assets/img/home/feature/entretenimiento.png" alt="f">
                            </div>
                            <h6>
                                <a href="#0">
                                    Lo mejor en entretenimiento
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="home__feature__items">
                            <div class="thumb">
                                <img src="assets/img/home/feature/facil.png" alt="f">
                            </div>
                            <h6>
                                <a href="#0">
                                    Facil de usar

                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="home__feature__items">
                            <div class="thumb">
                                <img src="assets/img/home/feature/jovenes.png" alt="f">
                            </div>
                            <h6>
                                <a href="#0">
                                    Orientado a jovenes venezolanos
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="home__feature__items">
                            <div class="thumb">
                                <img src="assets/img/home/feature/atencion.png" alt="f">
                            </div>
                            <h6>
                                <a href="#0">
                                    Atención 100% garantizada
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="home__feature__items">
                            <div class="thumb">
                                <img src="assets/img/home/feature/interfaz.png" alt="f">
                            </div>
                            <h6>
                                <a href="#0">
                                    Interfaz muy amigable y facil de usar para el usuario
                                </a>
                            </h6>
                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="home__feature__items">
                            <div class="thumb">
                                <img src="assets/img/home/feature/servicio.png" alt="f">
                            </div>
                            <h6>
                                <a href="#0">
                                    Servicio de calidad
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h__bottom d-none">
            <img src="assets/img/home/h-bottom2.png" alt="h-img">
        </div>
    </section>
    <!--Feature End-->

    <!--Home Pricing Here-->
    <section class="home__pricing pt-80 pb-120">
        <div class="container">
            <div class="domain__head mb-4">
                <h4 class="text-black wow fadeInDown" data-wow-delay="0.2s">
                    Noticias Relevantes <span class="text-base">de</span> Rumbero Extremo
                </h4>
            </div>
            <div class="row g-4">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home__price__items active__bg">
                        <div class="thumb">
                            <img src="assets/img/home/pricing/universidad.png" alt="img">
                        </div>
                        <div class="content">
                            <h5>
                                Eventos en Universidades
                            </h5>
                            <p>
                                Son algunas de estas imagenes donde podras ver nuestros eventos en las Universidades
                                tales como fiestas, conciertos y muchos más.
                            </p>
                            <a href="#0" class="cmn--btn border__trans">
                                <span>
                                    Ver más
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home__price__items">
                        <div class="thumb">
                            <img src="assets/img/home/pricing/premio.png" alt="img">
                        </div>
                        <div class="content">
                            <h5>
                                Alianzas destacadas
                            </h5>
                            <p>
                                Son solo algunas de las alianzas mas influyentes que junto a rumbero extremo
                                han impulsado el entretenimiento.
                            </p>
                            <a href="#0" class="cmn--btn border__trans">
                                <span>
                                    Ver más
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home__price__items">
                        <div class="thumb">
                            <img src="assets/img/home/pricing/alianza.png" alt="img">
                        </div>
                        <div class="content">
                            <h5>
                                Nuevas Alianzas
                            </h5>
                            <p>
                                Algunas de nuestras nuevas alianzas donde podrán potenciar sus ventas y clientes.
                            </p>
                            <a href="#0" class="cmn--btn border__trans">
                                <span>
                                    Ver más
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home__price__items">
                        <div class="thumb">
                            <img src="assets/img/home/pricing/revisar.png" alt="img">
                        </div>
                        <div class="content">
                            <h5>
                                Blog o Feedback de Usuariso
                            </h5>
                            <p>
                                Testimonios de nuestros jovenes venezolanos que disfrutan utilizando todas las bondades
                                de nuestra app.
                            </p>
                            <a href="#0" class="cmn--btn border__trans">
                                <span>
                                    Ver más
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h__bottom">
            <img src="assets/img/home/h-bottom2.png" alt="h-img">
        </div>
    </section>
    <!--Home Pricing End-->

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

    <!--Jquery 3 6 0 Min Js-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--Bootstrap bundle Js-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!--Waypoint Jquery min Js-->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!--Viewport Jquery Js-->
    <script src="assets/js/viewport.jquery.js"></script>
    <!--Wow min Js-->
    <script src="assets/js/wow.min.js"></script>
    <!--Odometer Up min Js-->
    <script src="assets/js/odometer.min.js"></script>
    <!--Owl Carousel min Js-->
    <script src="assets/js/owl.min.js"></script>
    <!--Owl nice Jquery min Js-->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <!--main Js-->
    <script src="assets/js/main.js"></script>

</body>

</html>