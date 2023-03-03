@extends('layouts.nav')
@section('viteimports')
@endsection
@section('content')


    <table style="border: 1px solid black">
        <tr>
            <td>Fecha de reserva</td>
            <td>Numero de personas</td>
            <td>Accion</td>
        </tr>

        @isset($reservas)

        @foreach ($reservas as $reserva)
        <tr>
            <td>{{ $reserva->horario->fecha}}</td>
            <td>{{ $reserva->num_personas }}</td>
            <td><a href="/rdelete/{{ $reserva->id }}">Eliminar</a></td>
        </tr>
        @endforeach
        @endisset

    </table>

@endsection
