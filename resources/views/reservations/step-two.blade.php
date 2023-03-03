<x-guest-layout>

    <!-- ------------------------   Reservation Step Two Form Section ------------------------ -->
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
                    <h1 class="fw-bold">Reserva tu mesa en Bogo Restaurant</h1>
                    <p>Elija la mesa donde desea estar en Bogo Restaurant</p>
                    <hr />
                    <form method="POST" action="{{ route('reservations.store.step.two') }}" class="row g-3">
                        @csrf
                        <div class="col-md-12">
                            <label for="jenis_kelamin_input" class="form-label">Seleccione una mesa</label>
                            <select name="table_id" id="jenis_kelamin_input" class="form-select">
                                <option selected>Seleccione una mesa ...</option>
                                @forelse ($tables as $table)
                                    <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                        {{ $table->name }}
                                        ({{ $table->guest_number }} invitados)
                                    </option>
                                @empty
                                    <option value="">
                                        No hay mesas disponibles en este momento :()
                                    </option>
                                @endforelse
                            </select>
                            @error('table_id')
                                <p class="register_text_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-12 mx-auto mt-4 text-center">
                            <p class="text-center col-md-8 mx-auto">
                                Al presionar el botón 'Confirmar reserva', significa que está de acuerdo y eres
                                el responsable de la reserva que esta creando.
                            </p>
                            <a href="{{ route('reservations.step.one') }}"
                                class="btn btn-outline-light text-white px-5 py-2 fw-bold me-3">
                                <i class="fas fa-arrow-left"></i> &nbsp; Atrás
                            </a>
                            <button type="submit" class="btn btn-outline-light text-white px-5 py-2 fw-bold">
                                Confirmar reserva &nbsp; <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
