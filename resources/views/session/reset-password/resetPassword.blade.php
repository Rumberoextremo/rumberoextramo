<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <!-- Material Design Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" />
    <link rel="stylesheet" href="../assets/css/resetpassword.css">
</head>
<body>

<div class="page-header section-height-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                <div class="card shadow-lg mt-8">
                    <div class="card-header text-center bg-primary text-white">
                        <h4 class="mb-0">Cambiar Contraseña</h4>
                    </div>
                    <div class="card-body p-4">
                        <form role="form" action="/reset-password" method="POST">
                            <input type="hidden" name="token" value="{{ $token }}">
                            
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input id="email" name="email" type="email" class="form-control" placeholder="Ingrese su correo" aria-label="Email" required>
                                <!-- Aquí se debe manejar el error en el backend -->
                                <p class="text-danger text-xs mt-2" id="email-error" style="display: none;">Error en el correo</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Nueva Contraseña</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Ingrese nueva contraseña" aria-label="Password" required>
                                <!-- Aquí se debe manejar el error en el backend -->
                                <p class="text-danger text-xs mt-2" id="password-error" style="display: none;">Error en la contraseña</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="password-confirmation">Confirmar Contraseña</label>
                                <input id="password-confirmation" name="password_confirmation" type="password" class="form-control" placeholder="Confirme su contraseña" aria-label="Password-confirmation" required>
                                <!-- Aquí se debe manejar el error en el backend -->
                                <p class="text-danger text-xs mt-2" id="password-confirmation-error" style="display: none;">Las contraseñas no coinciden</p>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-100 mt-4 mb-0">Recuperar contraseña</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="oblique position-absolute top-0 h-100">
                    <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Material Design Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>
</html>