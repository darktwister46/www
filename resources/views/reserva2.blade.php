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
                        @if (Auth::check())
                            <input type="text" name="nombre" class="form-control" value="{{ Auth::user()->name }}">
                        @else
                            <input type="text" name="nombre" class="form-control">
                        @endif
                        @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        @if (Auth::check())
                            <input type="text" name="apellidos" class="form-control" value="{{ Auth::user()->apellidos }}">
                        @else
                            <input type="text" name="apellidos" class="form-control">
                        @endif
                        <input type="text" name="apellidos" class="form-control" value="{{ Auth::user()->apellidos }}">
                        @error('apellidos')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="num_personas" class="form-label">*Número de personas</label>
                        <input type="number" name="num_personas" max="8" class="form-control">
                        @error('num_personas')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="telefono" class="form-label">Telefono</label>
                        @if (Auth::check())
                            <input type="number" name="telefono" class="form-control" value="{{ Auth::user()->telefono }}">
                        @else
                            <input type="number" name="telefono" class="form-control">
                        @endif
                        @error('telefono')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="menu" class="form-label">Menú entrante: </label>
                        <select name="menu">
                            @foreach ($menus as $valor)
                                <option value="{{ $valor->id }}"> {{ $valor->nombre }}
                            @endforeach
                        </select>
                        @error('menu')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="num_tarjeta" class="form-label">*Tarjeta bancaria</label>
                        <input type="text" name="num_tarjeta" class="form-control">
                        @error('num_tarjeta')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        @if (Auth::check())
                            <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
                        @else
                            <input type="text" name="email" class="form-control">
                        @endif
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <input type="text" name="fecha" value="{{ $fecha }}" readonly="readonly"
                            class="form-control" style="margin-bottom: 1%">
                        <input type="text" name="hora" value="{{ $hora }}" readonly="readonly"
                            class="form-control">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Aceptar">
                    </div>
                </form>
            </div>
    </div>
    </center>
@endsection
