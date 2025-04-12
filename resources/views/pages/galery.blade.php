<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galería</title>
    <!--Favicon img-->
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <!--Bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--All min css-->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!--main css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
                <ul class="main-menu">
                    <li><a href="{{ route('nosotros') }}">Quienes Somos?</a></li>
                    <li><a href="{{ route('contacto') }}">Contacto</a></li>
                    <li><a href="{{ route('demo') }}">Demo</a></li>

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
                <div class="col-12">
                    <div class="banner__content text-center">
                        <h6>Galería</h6>
                        <h4>Explora nuestras imágenes</h4>
                        <p>Descubre momentos capturados en nuestra galería.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

    <!--Gallery Section-->
    <section class="gallery__section pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gallery__item">
                        <img src="{{ asset('assets/img/galery/helado.webp') }}" alt="Gallery Image 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gallery__item">
                        <img src="{{ asset('assets/img/galery/parque.webp') }}" alt="Gallery Image 2" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gallery__item">
                        <img src="{{ asset('assets/img/galery/imagen1.jpg') }}" alt="Gallery Image 3" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gallery__item">
                        <img src="{{ asset('assets/img/galery/imagen2.jpg') }}" alt="Gallery Image 4" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gallery__item">
                        <img src="{{ asset('assets/img/galery/imagen3.jpg') }}" alt="Gallery Image 5" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gallery__item">
                        <img src="{{ asset('assets/img/galery/Venezuela-canaima.jpg') }}" alt="Gallery Image 1" class="img-fluid">>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery End-->

    <!--Carrusel Start-->
<section class="carousel__section pt-120 pb-120">
    <div class="container">
        <h4 class="text-center mb-4"></h4>
        <div id="imageCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/galery/helado.webp') }}" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/galery/parque.webp') }}" class="d-block w-100" alt="Imagen 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/galery/imagen1.jpg') }}" class="d-block w-100" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/galery/imagen2.jpg') }}" class="d-block w-100" alt="Imagen 4">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/galery/imagen3.jpg') }}" class="d-block w-100" alt="Imagen 5">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/galery/Venezuela-canaima.jpg') }}" class="d-block w-100" alt="Imagen 6">
                </div>
            </div>
            <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--Carrusel End-->

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