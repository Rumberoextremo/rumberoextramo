<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Política de Privacidad</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon1.ico">
    <!-- Bootstrap min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Main css -->
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
                        <h4>Politicas de Privacidad</h4>
                        <p>Ultima Actualización: 27 de Febrero del 2025.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Banner End-->

    <div class="container my-5">
        <div class="card shadow-lg border-0">
            <div class="card-body" style="color: black;">
                <h5 class="mt-4">1. Introducción</h5>
                <p>En Rumbero Extremo, valoramos su privacidad y nos comprometemos a proteger su información personal. Esta política explica cómo recopilamos, usamos y compartimos su información.</p>

                <h5 class="mt-4">2. Información que recopilamos</h5>
                <p>Recopilamos información personal que usted nos proporciona directamente, como su nombre, correo electrónico y número de teléfono. También podemos recopilar información automáticamente, como datos de navegación y uso del sitio web.</p>

                <h5 class="mt-4">3. Uso de la información</h5>
                <p>Utilizamos su información para:</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle text-success"></i> Proporcionar y mejorar nuestros servicios.</li>
                    <li><i class="fas fa-check-circle text-success"></i> Comunicarle información relevante.</li>
                    <li><i class="fas fa-check-circle text-success"></i> Responder a sus consultas y comentarios.</li>
                </ul>

                <h5 class="mt-4">4. Compartir información</h5>
                <p>No vendemos ni alquilamos su información personal a terceros. Solo compartimos su información en las siguientes circunstancias:</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check-circle text-success"></i> Con proveedores de servicios que nos ayudan a operar nuestro negocio.</li>
                    <li><i class="fas fa-check-circle text-success"></i> Cuando lo exija la ley o para proteger nuestros derechos.</li>
                </ul>

                <h5 class="mt-4">5. Seguridad de la información</h5>
                <p>Implementamos medidas de seguridad para proteger su información personal. Sin embargo, ningún método de transmisión por Internet o almacenamiento electrónico es 100% seguro.</p>

                <h5 class="mt-4">6. Sus derechos</h5>
                <p>Tiene derecho a acceder, corregir o eliminar su información personal. Para ejercer estos derechos, contáctenos a través de los canales proporcionados a continuación.</p>

                <h5 class="mt-4">7. Cambios a esta política</h5>
                <p>Podemos actualizar esta política de privacidad ocasionalmente. Le notificaremos sobre cambios significativos a través de nuestro sitio web.</p>

                <h5 class="mt-4">8. Contacto</h5>
                <p>Si tiene preguntas sobre esta política, contáctenos en sistemasrumberoextremo@gmail.com.</p>
            </div>
        </div>
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