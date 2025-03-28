<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Quienes Somos</title>
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
   <!--==== Scrool Top Bottom Here ======= -->
   <div id="progress">
      <span id="valiu"><i class="fas fa-arrow-up"></i></span>
   </div>
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
                  <a href="{{ route('galery') }}">Galeria</a>
               </li>
               <li>
                  <a href="{{ route('contacto') }}">Contactanos</a>
               </li>
               <li>
                  <a href="{{ route('demo') }}">Demo</a>
               </li>
               <li>
                  <a href="#0">Paginas <i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                     <li class="subtwohober">
                        <a href="services.html">
                           <span class="icon"><i class="fa-solid fa-cloud"></i></span>
                           <span>Services</span>
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
                     Quienes Somos
                  </h4>
                  <ul>
                     <li>
                        <a href="#0">
                           Home
                        </a>
                     </li>
                     <li>
                        <i class="fa-solid fa-arrow-right"></i>
                     </li>
                     <li>
                        Quienes Somos
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6">
               <div class="banner__Thumb">
                  <img src="assets/img/about/acerca-de.png" alt="about-img">
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Banner End-->

   <!--Atos Hosting Start-->
   <section class="atos__hosting pt-120 pb-120">
      <div class="container">
         <div class="section__header section__header__space">
            <h2 class="wow fadeInDown" data-wow-delay="0.2s">
               Quien es <span class="text-base">Rumbero Extremo</span>
            </h2>
            <p class="text-black wow fadeInDown" data-wow-delay="0.4s">
               Es una aplicación de esparcimiento social dedicado principalmente para jovenes adultos venezolanos
               que busquen lugares nocturnos o diurnos para compartir con amigos en los distintos sectores de la ciudad
            </p>
         </div>
         <div class="row g-4">
            <div class="col-xxl-9 col-xl-9 col-lg-9">
               <div class="atos__right__wrap">
                  <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="atos__body">
                           <div class="thumb">
                              <img src="assets/img/tab/telefono.png" alt="t-img">
                           </div>
                           <div class="content">
                              <p>
                                 (restaurantes, bodegones, licorerias, parques de diversiones, viajes y
                                 locales afines) donde, además, tienen la posibilidad de encontrar
                                 en un solo ligar y de forma interactiva, descuentos y promociones al que
                                 tendran accesos a través de una suscripción mensual.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Atos Hosting End-->

   <!--Home Product Here-->
   <section class="home__product pt-120 pb-120">
      <div class="container">
         <div class="domain__head mb-4">
            <h4 class="text-white wow fadeInDown" data-wow-delay="0.2s">
               Nuestra <span class="text-base">Mision</span>
            </h4>
         </div>
         <div class="row g-4">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
               <div class="home__product__items active__bg">
                  <div class="thumb">
                     <img src="assets/img/home/product/plataforma.png" alt="img">
                  </div>
                  <div class="content">
                     <h5>
                        <a href="#0">
                           Plataforma
                        </a>
                     </h5>
                     <p>
                        Brindar una plataforma que facilite la busqueda de mejor lugares.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
               <div class="home__product__items active__bg">
                  <div class="thumb">
                     <img src="assets/img/home/product/experiencia.png" alt="img">
                  </div>
                  <div class="content">
                     <h5>
                        <a href="#0">
                           Experiencia
                        </a>
                     </h5>
                     <p>
                        Transformando la experiencia nocturna o diurna conectando a muchisimos usuarios.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
               <div class="home__product__items active__bg">
                  <div class="thumb">
                     <img src="assets/img/home/product/calendario.png" alt="img">
                  </div>
                  <div class="content">
                     <h5>
                        <a href="#0">
                           Eventos
                        </a>
                     </h5>
                     <p>
                        Conecta los mejores evenos desde la capital hasta el interior del pais.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-sm-6">
               <div class="home__product__items active__bg">
                  <div class="thumb">
                     <img src="assets/img/home/product/entretenimiento.png" alt="img">
                  </div>
                  <div class="content">
                     <h5>
                        <a href="#0">
                           Entretenimiento
                        </a>
                     </h5>
                     <p>
                        El mejor entretenimiento para todas las edades del publico venezolano.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="h__bottom">
         <img src="assets/img/home/h-bottom.png" alt="h-img">
      </div>
   </section>
   <!--Home Product End-->

   <!--Feature Here-->
   <section class="feature__section pt-80 pb-80">
      <div class="container">
         <div class="section__header section__header__space">
            <h2 class="wow fadeInDown" data-wow-delay="0.2s">
               Nuestra <span class="text-base"> Vision</span>
            </h2>
         </div>
         <div class="feature__wrap">
            <div class="row g-4">
               <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="feature__items">
                     <p>
                        Ofrecer a un target adulto contemporaneo la unica opcion de una aplicación.
                     </p>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="feature__items">
                     <p>
                        qué reune lo mejor en entretenimiento, ofreciendo diversion con descuentos.
                     </p>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="feature__items">
                     <p>
                        Aspiramos a ser la apliación lider en el mundo del entretenimiento, fomentando una comunidad vibrante.
                     </p>
                  </div>
               </div>
               <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                  <div class="feature__items">
                     <p>
                        Y activa que promueve el entretenimiento en los diversos locales y areas mas exclusivas y brindando
                        diferentes alternativas.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Feature End-->

   <!--Feature Section Start-->
   <section class="faq__section pt-120 pb-120">
      <div class="container">
         <div class="section__header center">
            <h2 class="text-white wow fadeInDown" data-wow-delay="0.2s">
               Preguntas <span class="text-base">Frecuentes</span>
            </h2>
            <p class="text-white wow fadeInDown" data-wow-delay="0.4s">
               Aca encontrarás algunas de las preguntas que los usuarios nos hacen al momento de
               utilizar la aplicación o afiliarse.
            </p>
         </div>
         <div class="row g-4 align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
               <div class="faq__left">
                  <img src="assets/img/faq/preguntas.png" alt="right-img">
               </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6">
               <div class="faq__right">
                  <div class="accordion" id="accordionExample">
                     <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              How to install it?
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid distinctio, quasi totam ea dignissimos, iure nesciunt quam aspernatur deleniti mollitia dolorum enim. Odit.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingTwo">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              i can get offer?
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid distinctio, quasi totam ea dignissimos, iure nesciunt quam aspernatur deleniti mollitia dolorum enim. Odit.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingThree">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Our service is good for you
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid distinctio, quasi totam ea dignissimos, iure nesciunt quam aspernatur deleniti mollitia dolorum enim. Odit.
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingfour">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                              Our service is good for you
                           </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aliquid distinctio, quasi totam ea dignissimos, iure nesciunt quam aspernatur deleniti mollitia dolorum enim. Odit.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Feature Section End-->

   <!--Feature Section Start-->
   <section class="server__section pt-120 pb-120">
      <div class="container">
         <div class="row g-4">
            <div class="col-xxl-5">
               <div class="server__left__wrap">
                  <div class="section__header">
                     <h2 class="text-black wow fadeInDown" data-wow-delay="0.2s">
                        Obten una version <span class="text-base"> de Prueba</span>
                     </h2>
                     <p class="text-black wow fadeInDown" data-wow-delay="0.4s">
                        Quieres conocer nuevos sitios donde divertirte ? descarga nuestra demo
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-xxl-7">
               <div class="server__right__wrap owl-theme owl-carousel">
                  <div class="server__items">
                     <div class="calling">
                        <h4>
                           Android
                        </h4>
                        <p>
                           DEMO ANDROID
                        </p>
                        <a href="#0" class="cmn--btn">
                           <span>DESCARGAR</span>
                        </a>
                     </div>
                  </div>
                  <div class="server__items">
                     <div class="calling">
                        <h4>
                           IOS
                        </h4>
                        <p>
                           DEMO APPLE IOS
                        </p>
                        <a href="#0" class="cmn--btn">
                           <span> DESCARGAR </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--Feature Section End-->

   <!--Sponsor Section Start-->
   <div class="sponsor__section pt-80 pb-80">
      <div class="container">
         <div class="row g-4">
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6">
               <div class="spnsor__items">
                  <a href="#0">
                     <img src="assets/img/sponsor/jcb.png" alt="img">
                  </a>
               </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6">
               <div class="spnsor__items">
                  <a href="#0">
                     <img src="assets/img/sponsor/visa.png" alt="img">
                  </a>
               </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6">
               <div class="spnsor__items">
                  <a href="#0">
                     <img src="assets/img/sponsor/paypal.png" alt="img">
                  </a>
               </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6">
               <div class="spnsor__items">
                  <a href="#0">
                     <img src="assets/img/sponsor/master-card.png" alt="img">
                  </a>
               </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6">
               <div class="spnsor__items">
                  <a href="#0">
                     <img src="assets/img/sponsor/jcb.png" alt="img">
                  </a>
               </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-4 col-sm-4 col-xs-6">
               <div class="spnsor__items">
                  <a href="#0">
                     <img src="assets/img/sponsor/visa.png" alt="img">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Sponsor Section End-->

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