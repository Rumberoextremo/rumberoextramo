<!-- resources/views/gracias.blade.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gracias</title>
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
                        <h4>Esta a un paso de ser parte de nuestra comunidad como aliado o afiliado !</h4>
                        <h6>¡Gracias por enviarnos tus datos!</h6>
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

    <div class="container text-center pt-5">
        <p>Los revisaremos pronto y te daremos respuesta lo antes posible.</p>
        <a href="{{ route('home') }}" class="btn btn-primary">Volver al inicio</a>
    </div>
</body>

</html>