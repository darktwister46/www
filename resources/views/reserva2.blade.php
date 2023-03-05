@extends ('layouts.nav')

@section('content')
    <div class="login">
        <section class="container">

            <div class="container">
                <h3 class="pt-4 pb-2">Complete su reserva</h3>

                <form class="row g-3 mt-3" method="post" action="/rstore">
                    @csrf
                    <div class="col-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="nombre" name="nombre" class="form-control" value="{{ Auth::user()->name}}">
                    </div>
                    <div class="col-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="apellidos" name="apellidos" class="form-control" value="{{ Auth::user()->apellidos}}">
                    </div>
                    <div class="col-6">
                        <label for="num_personas" class="form-label">*Número de personas</label>
                        <input type="number" name="num_personas" max="8" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" name="telefono" class="form-control" value="{{ Auth::user()->telefono}}">
                    </div>
                    <div class="col-12">
                        <label for="menu" class="form-label">Menú entrante: </label>
                        <select name="menu">
                            @foreach ($menus as $valor)
                                <option value="{{ $valor->id }}"> {{ $valor->nombre }}
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="num_tarjeta" class="form-label">*Tarjeta bancaria</label>
                        <input type="text" name="num_tarjeta" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" value="{{ Auth::user()->email}}">
                    </div>
                    <div class="col-12">
                    <input type="text" name="fecha" value="{{ $fecha }}" readonly="readonly" class="form-control" style="margin-bottom: 1%">
                    <input type="text" name="hora" value="{{ $hora }}" readonly="readonly" class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                    </div>
                </form>
            </div>
    </div>
    </center>
@endsection
