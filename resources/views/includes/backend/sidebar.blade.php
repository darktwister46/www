<div class="sidebar-wrapper h-100">
    <nav class="sidebar-main">
        <div id="sidebar-menu">
            <ul class="sidebar-links custom-scrollbar">
                <li class="back-btn">
                    <a href="#">
                        <img class="img-fluid" src="#" alt="">
                    </a>
                    <div class="mobile-back text-right">
                        <span>Back</span>
                        <i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                    </div>
                </li>

                <li class="sidebar-main-title pt-0">
                    <div>
                        <h6>Pagina principal</h6>
                        <p>Panel de control y descripción general</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin') }}">
                        <i data-feather="home"></i>
                        <span>Panel de control</span>
                    </a>
                </li>

                <li class="sidebar-main-title">
                    <div>
                        <h6>Gestionar categorías y menús</h6>
                        <p>Datos de categoría y menú</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="grid"></i>
                        <span>Categoría de comida</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li class="active">
                            <a href="{{ url('/admin/categories') }}">
                                Datos de categoría de alimentos
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/categories/create') }}">
                                Agregue una categoría de alimentos / bebidas
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="coffee"></i>
                        <span>Catálogo de menú</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ url('/admin/menus') }}">
                                Todas las listas de menú
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/menus/create') }}">
                                Agrega un nuevo menú
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-main-title">
                    <div>
                        <h6>Administrar tablas y reservas</h6>
                        <p>Datos de mesas y reserva</p>
                    </div>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="users"></i>
                        <span>Datos de mesa</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ url('/admin/tables') }}">
                                Lista de mesas
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/tables/create') }}">
                                Agregar datos de mesa nuevos
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-list">
                    <a class="sidebar-link sidebar-title" href="#">
                        <i data-feather="calendar"></i>
                        <span>Lista de reservas</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ url('/admin/reservations') }}">
                                Todas las listas de reservas
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/reservations/create') }}">
                                Agregue un nuevo horario de reserva
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
    </nav>
</div>
