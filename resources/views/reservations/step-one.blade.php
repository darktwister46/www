<x-guest-layout>

    <!-- ------------------------   Reservation Step One Form Section ------------------------ -->
    <section class="my-5">
        <div class="container">
            <div class="row my-4 mx-1">
                <div
                    class="
                col-md-12
                mx-auto
                bg-warning
                text-white
                p-md-5 p-4
                shadow-lg
                rounded-3
              ">
                    <small>RESERVA BOGO RESTAURANT</small>
                    <h1 class="fw-bold">Reserva mesa en Bogo Restaurant</h1>
                    <p>Complete el siguiente formulario correctamente para pedir tu reserva en el restaurante</p>
                    <hr />
                    <form method="POST" action="{{ route('reservations.store.step.one') }}" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="nama_depan_input" class="form-label">Nombre</label>
                            <input type="text" name="first_name" value="{{ $reservation->first_name ?? '' }}"
                                placeholder="Introduzca su nombre" class="form-control" id="nama_depan_input" />
                            @error('first_name')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama_belakang_input" class="form-label">Apellido</label>
                            <input type="text" name="last_name" value="{{ $reservation->last_name ?? '' }}"
                                placeholder="Introduzca su apellido" class="form-control" id="nama_belakang_input" />
                            @error('last_name')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="email_input" class="form-label">Email</label>
                            <input type="text" name="email" value="{{ $reservation->email ?? '' }}"
                                placeholder="ejemplo@gmail.com" class="form-control" id="email_input" />
                            @error('email')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nomor_telepon_input" class="form-label">Número de teléfono</label>
                            <input type="number" name="tel_number" value="{{ $reservation->tel_number ?? '' }}"
                                placeholder="Introduzca su número de telefono" class="form-control"
                                id="nomor_telepon_input" />
                            @error('tel_number')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="nomor_telepon_input" class="form-label">Fecha de reserva</label>
                            <input type="datetime-local" id="res_date" name="res_date"
                                min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                                max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                                class="form-control" />
                            <span class="mt-1 fs-12">Nuestro horario es de las 17:00 a las 23:00.</span>
                            @error('res_date')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div> --}}
                        <div class="col-md-6">
                            <label for="jenis_kelamin_input" class="form-label">Número de invitados</label>
                            <select name="guest_number" id="jenis_kelamin_input" class="form-select">
                                <option selected>Número de invitados ...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                            @error('guest_number')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <div id="explication">
                                        <h1>Escoge la fecha</h1>
                                        <p>Para escoger tu fecha pulse en la fecha que desee en el calendario y continue
                                            colocando una de las horas disponibles abajo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- FULL CALENDAR -->
                        <div class="col-md-7">
                            <div class="card">
                                <div class="card-body">
                                    <div id="calendar"></div>

                                </div>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/index.global.min.js"></script>
                            <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.0.3/main.min.css" rel="stylesheet">
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    var calendarEl = document.getElementById('calendar');

                                    var calendar = new FullCalendar.Calendar(calendarEl, {
                                        headerToolbar: {
                                            left: 'prevYear,prev,next,nextYear today',
                                            center: 'title',
                                            right: 'dayGridMonth,dayGridWeek,dayGridDay'
                                        },
                                        initialDate: '2023-01-01',
                                        navLinks: true, // can click day/week names to navigate views
                                        editable: false,
                                        selectable: true,
                                        select: function(startDate, endDate) {
                                            selectedDate = startDate;
                                        },
                                        dayMaxEvents: true, // allow "more" link when too many events
                                        events: [
                                            @forelse ($reservations as $item)
                                                {
                                                    title: 'Reservado',
                                                    start: '{{ $item->res_date->format('Y-m-d\TH:i:s') }}',
                                                    end: '{{ $item->res_date->addHour()->format('Y-m-d\TH:i:s') }}',
                                                    color: 'red'
                                                },
                                            @empty
                                            @endforelse
                                        ]
                                    });

                                    calendar.render();
                                });
                            </script>
                            <style>
                                #calendar {
                                    max-width: 500px;
                                    margin: 0 auto;
                                    font-size: 10px;
                                }

                                .fc-header-title h2 {
                                    font-size: .9em;
                                    white-space: normal !important;
                                }

                                .fc-view-month .fc-event,
                                .fc-view-agendaWeek .fc-event {
                                    font-size: 0;
                                    overflow: hidden;
                                    height: 2px;
                                }

                                .fc-view-agendaWeek .fc-event-vert {
                                    font-size: 0;
                                    overflow: hidden;
                                    width: 2px !important;
                                }

                                .fc-agenda-axis {
                                    width: 20px !important;
                                    font-size: .7em;
                                }

                                .fc-button-content {
                                    padding: 0;
                                }

                                .fc-toolbar-title {
                                    color: #2b3c4d;
                                }

                                #explication {
                                    background-color: #2b3c4d;
                                    color: white;
                                    padding: 10px;
                                    border-radius: 5px;
                                }
                            </style>
                            <div class="col-md-12 mx-auto mt-4 text-center">
                                <label for="reservation_time" class="form-label">Hora de reserva</label>
                                @error('reservation_time')
                                    <p class="register_text_error">{{ $message }}</p>
                                @enderror
                                <p class="text-center col-md-8 mx-auto">
                                    El siguiente paso es elegir la mesa que va a ocupar, confirme los datos y
                                    que el numero de teléfono sea el correcto.
                                </p>
                                <button type="submit" class="btn btn-outline-light text-white px-5 py-2 fw-bold">
                                    Continuar &nbsp; <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
