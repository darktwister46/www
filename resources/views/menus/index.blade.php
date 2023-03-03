<x-guest-layout>

    <!-- ------------------------ Menu Hero Section ------------------------ -->
    <section>
        <div class="container">
            <div class="mt-4 mt-md-0 mb-3 bg-warning text-white rounded-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 p-5 my-auto align-center">
                            <h1 class="display-5 fw-bold">Catálogo de menú</h1>
                            <p class="col-md-10">
                                Aquí puedes encontrar todos los menús de nuestro restaurante.
                            </p>
                            <button class="btn btn-outline-light text-white px-4 fw-bold" type="button">
                                Ver todo &nbsp; <i class="fas fa-arrow-down"></i>
                            </button>
                        </div>
                        <div class="col-md-4 my-auto p-0">
                            <img src="{{ url('images/landing-page/user-listing-images-removebg-preview-2.png') }}"
                                class="img-fluid img-jumbotron d-none d-md-block" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------ Menu Main Content [Filter & Menu Card] Section ------------------------ -->
    <section>
        <div class="container" style="margin-bottom: 100px">
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="alert alert-warning" role="alert">
                        Hay un total de {{ DB::table('menus')->count() }} menús disponibles en el catálogo de nuestro restaurante.
                    </div>
                    <div class="row g-3">
                        @foreach ($menus as $menu)
                            <div class="col-md-4">
                                <div class="card card-borderless-shadow card-min-height">
                                    <img src="{{ Storage::url($menu->image) }}"
                                        class="card-img-top card-img-top-menus" />
                                    <div class="card-body">
                                        <h5 class="card-title fw-bold"> {{ $menu->name }}</h5>
                                        <div class="category-card-description-wrapper">
                                            <p class="card-text category-card-description" style="font-size: 13px;">
                                                {{ $menu->description }}
                                            </p>
                                        </div>
                                        <hr>
                                        <h5 class="fw-semibold">{{ $menu->price }}€</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
