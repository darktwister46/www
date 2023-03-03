<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bogo Restaurant</title>

    <link rel="icon" href="{{ url('') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('') }}" type="image/x-icon">

    <!-- Fuentes -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@xz/fonts@1/serve/plus-jakarta-display.min.css" />

    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/4d516d4246.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
</head>

<body>

    <!-- ------------------------ Mobile Header Section ------------------------ -->
    <nav class="navbar navbar-light bg-white d-block d-sm-block d-md-block d-lg-none py-3 border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="#">Bogo Restaurant</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">
                        Bogo Restaurant
                    </h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="margin-top: -24px">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <hr />
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#tentang-kami">Sobre nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('menus.index') }}">Menús</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#galeri-outlet">Galeria</a>
                        </li>
                    </ul>
                    <hr />
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning text-white me-2 px-5 fw-500"
                            onclick="location.href='http://127.0.0.1:8000/reservation/step-one'" type="button"> <i
                                class="fas fa-calendar-plus"></i> &nbsp; &nbsp; Reserva ya!</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ------------------------ Double Header Section ------------------------ -->
    <nav class="py-1 bg-white border-bottom d-none d-sm-none d-md-none d-lg-block text-grey">
        <div class="container d-flex flex-wrap fs-15">
            <ul class="nav me-auto">
                <li class="nav-item me-2">
                    <a href="/" class="nav-link link-dark text-grey px-2 active" aria-current="page">Inicio</a>
                </li>
                <li class="nav-item me-2">
                    <a href="/#tentang-kami" class="nav-link link-dark text-grey px-2">Sobre nosotros</a>
                </li>
                <li class="nav-item me-2">
                    <a href="{{ route('menus.index') }}" class="nav-link link-dark text-grey px-2">Menús</a>
                </li>
                <li class="nav-item me-2">
                    <a href="/#galeri-outlet" class="nav-link link-dark text-grey px-2">Galería</a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link link-dark text-grey px-2 no-effect-hover">Número de teléfono</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-dark text-grey px-2 no-effect-hover">|</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/+34654321000" class="nav-link link-dark text-grey px-2" target="_blank">
                        Whatsapp: 654 321 000</a>
                </li>
                <li class="nav-item">
                    <a href=""
                        class="nav-link link-dark text-grey px-2">987 654 321</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="py-3 mb-4 border-bottom d-none d-sm-none d-md-none d-lg-block bg-white sticky-top">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <span class="fs-3 fw-bold">Bogo Restaurant</span>
            </a>
            <button class="btn btn-warning text-white me-2 px-5 fw-500"
                onclick="location.href='http://127.0.0.1:8000/reservation/step-one'" type="button"> <i
                    class="fas fa-calendar-plus"></i> &nbsp; &nbsp; Reserva ya!</button>
        </div>
    </header>

    <!-- ------------------------ Main Content Section ------------------------ -->
    <main>
        {{ $slot }}
    </main>

    <!-- --------------------------- Footer Section ---------------------------- -->
    <footer class="py-5">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-6 border-end">
                    <h4 class="fw-bold">Bogo Restaurant</h4>
                    <p class="">
                        Somos un restaurante de 5 estrellas que ofrece una gran variedad de alimentos que van desde bebidas,
                        postres y platos especiales para deleitarte con la mejor experiencia alimenticia que puedas tener. Recuerda que si
                        quieres probar la experiencia puedes reservar tu mesa en nuestro sitio web.
                    </p>
                    <small class="d-block mb-3">
                        &copy; 2022 - Ismael Córdoba Rodríguez
                    </small>
                </div>

                <div class="col-6 col-md ms-0 ms-md-4">
                    <h4 class="fw-bold mb-3">Navegación rápida</h4>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6901">
                                Inicio
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6905">
                                Sobre nosotros
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6902">
                                Menú
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="/userlisting?srczz=&katfilt=6903">
                                Galería
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h4 class="fw-bold mb-3">Redes Sociales</h4>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="https://wa.me/+34654321000">
                                <i class="fab fa-whatsapp"></i> &nbsp; Whatsapp
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="#" target="_blank">
                                <i class="fab fa-instagram"></i> &nbsp; Instagram
                            </a>
                        </li>
                        <li class="mb-1">
                            <a class="link-light text-decoration-none" href="#" target="_blank">
                                <i class="fab fa-twitter"></i> &nbsp;Twitter
                            </a>
                        </li>
                        <li class="mb-5 mb-md-1">
                            <a class="link-light text-decoration-none" href="#" target="_blank">
                                <i class="fab fa-facebook-square"></i> &nbsp; Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <!-- Splide JS -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>

    <!-- Initializing Hero Section Splide JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide', {
                type: 'loop',
                padding: '80px',
                gap: '24px',
                autoplay: true,
                arrows: false,
                breakpoints: {
                    576: {
                        type: 'loop',
                        perPage: 1,
                        gap: '8px',
                        padding: '8px',
                    },
                }
            });
            splide.mount();
        });
    </script>

    <!-- Initializing Feature Section Splide JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide('.splide2', {
                type: 'fade',
                rewind: true,
                autoplay: true,
                arrows: false,
            });
            splide.mount();
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Testimonial Swiper -->
    <script>
        var swiper = new Swiper(".testimonial-swiper", {
            slidesPerView: 1,
            spaceBetween: 12,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2.2,
                    spaceBetween: 12,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 12,
                },
            },
        });
    </script>

    <!-- Initialize Menu Swiper -->
    <script>
        var swiper = new Swiper(".menu-swiper", {
            slidesPerView: 1,
            spaceBetween: 12,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2.2,
                    spaceBetween: 12,
                },
                1024: {
                    slidesPerView: 4.3,
                    spaceBetween: 12,
                },
            },
        });
    </script>

</body>

</html>
