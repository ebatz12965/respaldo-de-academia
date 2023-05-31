@extends('layout/plantilla4')

@section('tituloPagina', 'Crud con Laravel 8')

@section('contenido')
<!-- MENU START  -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <!-- NAV CONTAINER START -->
    <div class="container-fluid">
        <a href="" class="navbar-brand text-info fw-semibold fs-4">Rapidito</a>

        <!-- NAV BUTTON  -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#menuLateral"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- OFFCANVAS MAIN CONTAINER START -->
        <section
            class="offcanvas offcanvas-start"
            id="menuLateral"
            tabindex="-1"
        >
            <div class="offcanvas-header" data-bs-theme="dark">
                <h5 class="offcanvas-title text-info">Rapidito</h5>
                <button
                    class="btn-close"
                    type="button"
                    aria-label="Close"
                    data-bs-dismiss="offcanvas"
                ></button>
            </div>
            <!-- OFF CANVAS MENU LINKS  START-->
            <div
                class="offcanvas-body d-flex flex-column justify-content-between px-0"
            >
                <ul class="navbar-nav fs-5 justify-content-evenly">
                    <li class="nav-item p-3 py-md-1">
                        <a href="{{route("alumno.index")}}" class="nav-link">Alumnos</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="" class="nav-link">Catedráticos</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="{{route("curso.index")}}" class="nav-link">Cursos</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="{{route("grado.index")}}" class="nav-link">Grados</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="{{route("sucursal.index")}}" class="nav-link">Sucursales</a>
                    </li>
                    <li class="nav-item p-3 py-md-1">
                        <a href="{{route("report.index")}}" class="nav-link">Reporte Alumnos</a>
                    </li>
                </ul>
                <!-- enlaces redes sociales -->

                <div class="d-lg-none align-self-center py-3">
                    <a href=""><i class="bi bi-twitter px-2 text-info fs-2"></i></a>
                    <a href=""><i class="bi bi-facebook px-2 text-info fs-2"></i></a>
                    <a href=""><i class="bi bi-github px-2 text-info fs-2"></i></a>
                    <a href=""><i class="bi bi-whatsapp px-2 text-info fs-2"></i></a>
                </div>
            </div>
        </section>
        <!-- OFFCANVAS MAIN CONTAINER END  -->
    </div>
</nav>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
></script>

@endsection
