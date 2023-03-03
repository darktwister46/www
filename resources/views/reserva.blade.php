@extends('layouts.nav')
@section('viteimports')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <style>
        #hora {
            margin-top: 1%;
            margin-left: 1%;
            margin-right: 1%;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <center style="margin-top: 1%">
                <h2>Escoge la fecha de tu reserva</h2>
            </center>
        </div>
        <div class="card">
            <div id="calendar" style="margin-bottom: 2%"></div>
            <div id='hora' class="row" style="">
            </div>

        </div>
    </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'es',
                    selectable: true,
                    editable: true,
                    events: "/fecha",
                    eventClick: function(event) {
                        let fecha = moment(event.event.start).format("Y-MM-DD");
                        $.ajax({
                            type: "get",
                            url: "horas",
                            data: {
                                fecha: fecha
                            },
                            success: function(response) {
                                var horas = document.getElementById("hora");
                                horas.innerHTML = "";
                                var thoras = document.createElement("h2");
                                thoras.innerHTML = "Escoge la hora de tu reserva:";
                                horas.appendChild(thoras);
                                response.forEach(function(response) {
                                    var boton = document.createElement("button");
                                    boton.setAttribute("class", "btn btn-primary");
                                    boton.style.margin = "0.5%";
                                    boton.innerHTML = response.hora;
                                    horas.appendChild(boton);
                                    boton.addEventListener("click", function() {
                                        document.getElementById("fecha").value =
                                            fecha;
                                        document.getElementById("horas").value =
                                            response.hora;
                                        document.getElementById(
                                            "enviarhorario").submit();
                                    });
                                });
                                window.scrollTo(0, document.body.scrollHeight);
                            }
                        })
                    }
                });
                calendar.render();
            });
        </script>
        <form id='enviarhorario' method="post" action="/reserva2">
            @csrf
            <input type="hidden" name="fecha" id="fecha">
            <input type="hidden" name="hora" id="horas">
            <input type="hidden" id="botonhorario" type="submit">
        </form>
    @endsection
