@extends('layouts.nav')
@section('viteimports')
@endsection
@section('content')

    <h1 style="margin-top: 2%; text-align: center; margin-right:5%">Tus reservas:</h1>
    <div class="d-flex justify-content-center" style="margin-right:5%">
        <table class="table table-bordered" style="margin-top: 3%; width: 50%">
            <thead class="thead">
                <tr class="table-secondary">
                    <th>Fecha de reserva</th>
                    <th>Numero de personas</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @isset($reservas)
                    @forelse ($reservas as $reserva)
                        <tr>
                            <td>{{ $reserva->horario->fecha }}</td>
                            <td>{{ $reserva->num_personas }}</td>
                            <td><a href="/rdelete/{{ $reserva->id }}">Eliminar</a></td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="text-align: center">No tienes reservas</td>
                            </tr>
                        @endforelse
                    @endisset
                </tbody>
            </table>
        </div>
        <div class="alert alert-info" style="margin-top: 5%">
            <h3 style="text-align: center; margin-top: 3%">Recuerda que siempre puedes cancelar tu reserva pulsando el botón de
                eliminar para cancelar esta reserva.</h2>
        </div>

    @endsection
