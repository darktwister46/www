@extends('layouts.nav')
@section('viteimports')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <style>
    </style>
@endsection
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="width: 100%;">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ URL::asset('image/slider1.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ URL::asset('image/slider2.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ URL::asset('image/slider3.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">RESERVA YA EN BOGO RESTAURANT!</h5>
            <p class="card-text">Tenemos uno de los mejores restaurantes de España y te aseguramos que tendras una
                experiencia inolvidable en nuestro restaurante.</p>
            <a href="/reserva" class="btn btn-primary">RESERVA YA!</a>
        </div>
    </div>
    <div class="card-header text-center" style="font-weight: lighter; margin-bottom: 3%">
        No te pierdas nuestros platos. Busca tu momento, vive el sabor, disfruta de una experiencia mágica.
    </div>
    <div class="card" style="width: 18rem; left: 5%; margin-bottom: 3%; margin-top: 1%; display: inline-block;">
        <img class="card-img-top" src="{{ URL::asset('image/card1.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Ceviche de Lulo</h5>
            <p class="card-text">Nuestro "Ceviche de Lulo" es un plato fresco, vibrante y lleno de sabor. Utilizamos lulo fresco, una fruta exótica y deliciosa que es la estrella de este plato. Mezclamos su jugo cítrico y dulce con pescado fresco y marinado en una combinación de sabores únicos y deliciosos. Cada bocado es una explosión de sabor que te transporta a las playas de América Latina. Además, el lulo es una fuente de vitamina C y otros nutrientes importantes para tu cuerpo. ¡No te pierdas la oportunidad de probar este plato refrescante y exótico y experimentar un sabor que no olvidarás fácilmente!
                content.</p>
        </div>
    </div>

    <div class="card" style="width: 18rem; left: 5%; margin-bottom: 3%; display: inline-block;">
        <img class="card-img-top" src="{{ URL::asset('image/card2.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Guiso de atun a modo de ternera</h5>
            <p class="card-text">¿Está buscando una experiencia culinaria única y sabrosa? Nuestro "Guiso de atún a modo de ternera" es la respuesta. Este plato innovador utiliza atún fresco y de alta calidad, cocido a fuego lento en una mezcla de deliciosas especias y verduras frescas, creando un guiso tan tierno y sabroso que parece ternera. Con una textura suave y un sabor profundo y satisfactorio, este plato se convertirá rápidamente en uno de sus favoritos. Además, el atún es una opción saludable y rica en nutrientes. ¡No se pierda la oportunidad de probar esta deliciosa opción y experimentar una nueva dimensión de sabor en su mesa!</p>
        </div>

    </div>

    <div class="card" style="width: 18rem; left: 5%; margin-bottom: 3%; display: inline-block;">
        <img class="card-img-top" src="{{ URL::asset('image/card3.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Jugo de cebollas asadas</h5>
            <p class="card-text">Nuestro "Jugo de cebollas asadas" es una explosión de sabor en cada sorbo. Utilizamos cebollas frescas, asadas a la perfección para obtener su deliciosa y rica esencia. Cada gota de este jugo es una sinfonía de sabores terrosos y ahumados que se combinan en una experiencia única y satisfactoria para su paladar. Además, es una opción saludable para acompañar cualquier plato de nuestra carta. ¡No se pierda la oportunidad de probar esta delicia y experimentar una nueva dimensión de sabor en cada sorbo!</p>
        </div>

    </div>

    <div class="card" style="width: 18rem; left: 5%; margin-bottom: 3%; display: inline-block;">
        <img class="card-img-top" src="{{ URL::asset('image/card4.jpg') }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Pizzeta de erizos fosilizados</h5>
            <p class="card-text">
                Nuestro "Ceviche de Lulo" es un plato fresco, vibrante y lleno de sabor. Utilizamos lulo fresco, una fruta exótica y deliciosa que es la estrella de este plato. Mezclamos su jugo cítrico y dulce con pescado fresco y marinado en una combinación de sabores únicos y deliciosos. Cada bocado es una explosión de sabor que te transporta a las playas de América Latina. Además, el lulo es una fuente de vitamina C y otros nutrientes importantes para tu cuerpo. ¡No te pierdas la oportunidad de probar este plato refrescante y exótico y experimentar un sabor que no olvidarás fácilmente!
            </p>
        </div>
    </div>
@endsection
