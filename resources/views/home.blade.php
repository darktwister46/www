@extends('layouts.nav')
@section('viteimports')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Inicio de sesion') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <script type="text/javascript">
                            setTimeout(function() {
                                location.href = "/";
                            }, 5000); // 2 second
                        </script>
                        {{ __('Has iniciado sesion correctamente!
                        Redirigiendo al inicio en 5 segundos...') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
