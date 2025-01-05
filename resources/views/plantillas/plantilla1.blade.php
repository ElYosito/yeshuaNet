<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('img/logoyeshua.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liga Yeshua</title>
</head>

<body>
    <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="icono" name="cloud-outline"></ion-icon>
                <span>Liga Yeshua</span>
            </div>
            <button class="boton" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <ion-icon name="add-outline"></ion-icon>
                <span>Agregar joven</span>
            </button>
        </div>
        <nav class="navegacion">
            <ul>
                <li>
                    <a class="{{ request()->is('registros') ? 'active' : '' }}" href="/registros">
                        <ion-icon name="folder-outline"></ion-icon>
                        <span>Registros</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('eventos') || request()->is('eventos/create') ? 'active' : '' }}" href="/eventos">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <span>Eventos</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('asistencia') ? 'active' : '' }}" href="/asistencia">
                        <ion-icon name="checkbox-outline"></ion-icon>
                        <span>Asistencia</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('tesoreria') ? 'active' : '' }}" href="/tesoreria">
                        <ion-icon name="diamond-outline"></ion-icon>
                        <span>Tesorería</span>
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('reporte-del-mes') ? 'active' : '' }}" href="/reporte-del-mes">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                        <span>Reporte del mes</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Dark Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">

                        </div>
                    </div>
                </div>
            </div>

            <div class="usuario">
                <img src="{{asset('img/descarga.jpg')}}">
                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">Yosmar</span>
                        <span class="email">YosmarCoronado17@hotmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>
        @yield("con1")
    </main>

    <div class="modal fade text-left" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar joven</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('jovenes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="d-flex flex-column align-items-center">
                            <img id="img" src="{{asset('img/usuario.png') }}" alt="Imagen de usuario" class="rounded-circle" width="225" height="225">
                            <div class="mt-2">
                                <label for="foto" class="btn btn-primary">Cambiar foto</label>
                                <input type="file" name="foto" id="foto" accept="image/*" class="file-input d-none">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="Jose" required>
                                    <label for="nombre">Nombre:</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Perez Rodriguez">
                                    <label for="apellidos">Apellidos:</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="date" name="fecha_nacimiento" class="form-control" id="fecha_nacimiento" placeholder="Ingresa su fecha de nacimiento" onchange="calcularEdad()">
                                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad del empleado" readonly>
                                    <label for="edad">Edad</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa su dirección">
                                    <label for="direccion">Dirección</label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <div class="d-flex align-items-center">
                                    <span class="me-2">Hombre</span>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="genero" name="genero">
                                    </div>
                                    <span class="ms-2">Mujer</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="862123456">
                                    <label for="telefono">Teléfono</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="{{asset('js/nav.js')}}"></script>
    <script src="{{asset('js/foto.js')}}"></script>
    <script src="{{asset('js/edad.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>