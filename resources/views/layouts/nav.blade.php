<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Bogo Restaurant</title>
    <link rel="icon" href="{{ url('') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('') }}" type="image/x-icon">
    <!-- Fuentes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xz/fonts@1/serve/plus-jakarta-display.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- Scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @yield('viteimports')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="z-index: 1">
        <img src="{{ URL::asset('/image/logo.png') }}" style="width: 2%; height: 2%">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 25%">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HOTEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">HABITACIONES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index">RESTAURANTE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="reserva">RESERVA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto">Contáctanos</a>
                </li>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="misreservas">
                                {{ __('Mis reservas') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    @yield('content')
    <footer>
        <style>
            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {}

            a,
            a:hover,
            a:focus,
            a:active {
                text-decoration: none;
                outline: none;
            }

            a,
            a:active,
            a:focus {
                color: #333;
                text-decoration: none;
                transition-timing-function: ease-in-out;
                -ms-transition-timing-function: ease-in-out;
                -moz-transition-timing-function: ease-in-out;
                -webkit-transition-timing-function: ease-in-out;
                -o-transition-timing-function: ease-in-out;
                transition-duration: .2s;
                -ms-transition-duration: .2s;
                -moz-transition-duration: .2s;
                -webkit-transition-duration: .2s;
                -o-transition-duration: .2s;
            }

            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            section {
                padding: 60px 0;
                /* min-height: 100vh;*/
            }

            .footer {
                background: linear-gradient(105deg, #281b12, #281b12);
                padding-top: 80px;
                padding-bottom: 40px;
            }

            /*END FOOTER SOCIAL DESIGN*/
            .single_footer {}

            @media only screen and (max-width:768px) {
                .single_footer {
                    margin-bottom: 30px;
                }
            }

            .single_footer h4 {
                color: #fff;
                margin-top: 0;
                margin-bottom: 25px;
                font-weight: 700;
                text-transform: uppercase;
                font-size: 20px;
            }

            .single_footer h4::after {
                content: "";
                display: block;
                height: 2px;
                width: 40px;
                background: #fff;
                margin-top: 20px;
            }

            .single_footer p {
                color: #fff;
            }

            .single_footer ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            .single_footer ul li {}

            .single_footer ul li a {
                color: #fff;
                -webkit-transition: all 0.3s ease 0s;
                transition: all 0.3s ease 0s;
                line-height: 36px;
                font-size: 15px;
                text-transform: capitalize;
            }

            .single_footer ul li a:hover {
                color: #ff3666;
            }

            .single_footer_address {}

            .single_footer_address ul {}

            .single_footer_address ul li {
                color: #fff;
            }

            .single_footer_address ul li span {
                font-weight: 400;
                color: #fff;
                line-height: 28px;
            }

            .contact_social ul {
                list-style: outside none none;
                margin: 0;
                padding: 0;
            }

            /*START NEWSLETTER CSS*/
            .subscribe {
                display: block;
                position: relative;
                margin-top: 15px;
                width: 100%;
            }

            .subscribe__input {
                background-color: #fff;
                border: medium none;
                border-radius: 5px;
                color: #333;
                display: block;
                font-size: 15px;
                font-weight: 500;
                height: 60px;
                letter-spacing: 0.4px;
                margin: 0;
                padding: 0 150px 0 20px;
                text-align: center;
                text-transform: capitalize;
                width: 100%;
            }

            @media only screen and (max-width:768px) {
                .subscribe__input {
                    padding: 0 50px 0 20px;
                }
            }

            .subscribe__btn {
                background-color: transparent;
                border-radius: 0 25px 25px 0;
                color: #01c7e9;
                cursor: pointer;
                display: block;
                font-size: 20px;
                height: 60px;
                position: absolute;
                right: 0;
                top: 0;
                width: 60px;
            }

            .subscribe__btn i {
                transition: all 0.3s ease 0s;
            }

            @media only screen and (max-width:768px) {
                .subscribe__btn {
                    right: 0px;
                }
            }

            .subscribe__btn:hover i {
                color: #ff3666;
            }

            button {
                padding: 0;
                border: none;
                background-color: transparent;
                -webkit-border-radius: 0;
                border-radius: 0;
            }

            /*END NEWSLETTER CSS*/

            /*START SOCIAL PROFILE CSS*/
            .social_profile {
                margin-top: 40px;
            }

            .social_profile ul {
                list-style: outside none none;
                margin: 0;
                padding: 0;
            }

            .social_profile ul li {
                float: left;
            }

            .social_profile ul li a {
                text-align: center;
                border: 0px;
                text-transform: uppercase;
                transition: all 0.3s ease 0s;
                margin: 0px 5px;
                font-size: 18px;
                color: #fff;
                border-radius: 30px;
                width: 50px;
                height: 50px;
                line-height: 50px;
                display: block;
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            @media only screen and (max-width:768px) {
                .social_profile ul li a {
                    margin-right: 10px;
                    margin-bottom: 10px;
                }
            }

            @media only screen and (max-width:480px) {
                .social_profile ul li a {
                    width: 40px;
                    height: 40px;
                    line-height: 40px;
                }
            }

            .social_profile ul li a:hover {
                background: #ff3666;
                border: 1px solid #ff3666;
                color: #fff;
                border: 0px;
            }

            /*END SOCIAL PROFILE CSS*/
            .copyright {
                margin-top: 70px;
                padding-top: 40px;
                color: #fff;
                font-size: 15px;
                border-top: 1px solid rgba(255, 255, 255, 0.4);
                text-align: center;
            }

            .copyright a {
                color: #01c7e9;
                transition: all 0.2s ease 0s;
            }

            .copyright a:hover {
                color: #ff3666;
            }
        </style>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="single_footer" style="color: white">
                            <h4>Servicios</h4>
                            <a class="nav-link active" aria-current="page" href="#">HOTEL</a>
                            <a class="nav-link active" aria-current="page" href="#">HABITACIONES</a>
                            <a class="nav-link active" aria-current="page" href="index">RESTAURANTE</a>
                            <a class="nav-link active" aria-current="page" href="reserva">RESERVA</a>
                            <a class="nav-link" href="contacto">Contáctanos</a>
                        </div>
                    </div>
                    <!--- END COL -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Info</h4>
                            <ul>
                                <li><a href="#">Terminos de Servicio</a></li>
                                <li><a href="#">Política de privacidad</a></li>
                                <li><a href="#">Certificados de calidad</a></li>
                                <li><a href="#">Atención al cliente</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--- END COL -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Subscribete a nuestra Newsletter!</h4>
                            <div class="signup_form">
                                <form action="#" class="subscribe">
                                    <input type="text" class="subscribe__input"
                                        placeholder="Introduce tu email">
                                    <button type="button" class="subscribe__btn"><i
                                            class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="social_profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--- END COL -->
                </div>
                <!--- END ROW -->
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-xs-12">
                        <p class="copyright">Copyright © 2023 <a href="#">Ismael Córdoba Rodríguez</a>.</p>
                    </div>
                    <!--- END COL -->
                </div>
                <!--- END ROW -->
            </div>
            <!--- END CONTAINER -->
        </div>
    </footer>
</body>

</html>
