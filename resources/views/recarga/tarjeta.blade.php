{{-- resources/views/recarga/tarjeta.blade.php --}}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recarga de Tarjeta</title>
    <link rel="stylesheet" href="assets/css/tarjeta.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background:rgb(43, 134, 209);
            padding: 25px;
        }

        .container form {
            width: 700px;
            padding: 40px;
            background: #fff;
            border-radius: 10px;
        }

        form .row {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .row .column {
            flex: 1 1 250px;
        }

        .column .title {
            font-size: 20px;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .column .input-box {
            margin: 15px 0;
        }

        .input-box span {
            display: block;
            margin-bottom: 10px;
        }

        .input-box input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .column .flex {
            display: flex;
            gap: 15px;
        }

        .flex .input-box {
            margin-top: 5px;
        }

        .input-box img {
            height: 34px;
            margin-top: 5px;
            filter: drop-shadow(0 0 1px #000);
        }

        form .btn {
            width: 100%;
            padding: 12px;
            background:rgb(117, 0, 212);
            border: none;
            outline: none;
            border-radius: 6px;
            font-size: 17px;
            color: #fff;
            margin-top: 5px;
            cursor: pointer;
            transition: .5s;
        }

        form .btn:hover {
            background:rgb(93, 0, 180);
        }
    </style>
</head>


<body>

    <div class="container">
        <form action="">
            <div class="row">
                <div class="column">
                    <h3 class="title">Datos de la Tarjeta</h3>
                    <div class="input-box">
                        <span>Nombre en la Tarjeta:</span>
                        <input type="text" placeholder="Nombre Apellido">
                    </div>
                    <div class="input-box">
                        <span>Número de Tarjeta:</span>
                        <input type="text" placeholder="1111 2222 3333 4444">
                    </div>
                    <div class="flex">
                        <div class="input-box">
                            <span>Fecha de Vencimiento:</span>
                            <input type="text" placeholder="MM/AA">
                        </div>
                        <div class="input-box">
                            <span>CVV:</span>
                            <input type="text" placeholder="123">
                        </div>
                    </div>
                </div>

                <div class="column">
                    <h3 class="title">Datos de Contacto</h3>
                    <div class="input-box">
                        <span>Correo Electrónico:</span>
                        <input type="email" placeholder="ejemplo@email.com">
                    </div>
                    <div class="input-box">
                        <span>Monto a Recargar:</span>
                        <input type="number" placeholder="$150">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn">Recargar Tarjeta</button>
            <button type="button" class="btn btn-danger" onclick="window.location.href = '{{ route('dashboard') }}'">Volver</button>
        </form>
    </div>

</body>

</html>
