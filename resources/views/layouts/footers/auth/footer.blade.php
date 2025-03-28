<!-- resources/views/layouts/footer.blade.php -->
<footer class="bg-dark text-white py-4">
    <style>
        footer {
            background-color:rgb(64, 33, 202);
            color: #fff;
            padding: 30px 0;
            font-size: 14px;
        }

        footer ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        footer ul li {
            display: inline-block;
            margin-right: 20px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
            border-radius: 20px;
            padding: 8px 16px;
            transition: background-color 0.3s ease;
        }

        footer ul li a:hover {
            background-color: #333;
        }

        footer p {
            margin-bottom: 0;
            font-size: 14px;
            color: #999;
        }

        footer p a {
            color: #999;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer p a:hover {
            color: #ccc;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a href="{{ route('terms') }}" class="text-white">Terminos & Condiciones</a></li>
                    <li class="list-inline-item"><a href="{{ route('policy') }}" class="text-white">Política de Privacidad</a></li>
                </ul>
            </div>
            <div class="col-md-6 text-md-right">
                <p class="mb-0">
                    &copy; {{ date('Y') }} Todos los Derechos Reservados. Desarrollado por <a href="#" class="text-white">Rumbero Extremo</a>.
                </p>
            </div>
        </div>
    </div>
</footer>