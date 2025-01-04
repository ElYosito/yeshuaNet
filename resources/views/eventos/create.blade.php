@extends("plantillas.plantilla1")

@section("con1")

<style>
    .boton {
        width: auto;
        height: 45px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        border-radius: 10px;
        background-color: var(--color-boton);
        color: var(--color-boton-texto);
        padding: 0 15px;
    }

    .boton ion-icon {
        min-width: 50px;
        font-size: 25px;
    }

    .d-flex {
        display: flex;
    }

    select {
        height: 58px;
    }

    .evento-form {
        margin: 20px auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        width: 95%;
        display: none;
    }
</style>

<div class="d-flex">
    <a class="text-decoration-none" href="/eventos">
        <button class="boton">
            <ion-icon name="return-up-back-outline"></ion-icon>
            <span>Regresar</span>
        </button>
    </a>
</div>

<form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data" id="formEvento">
    @csrf

    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="fecha" name="fecha" required>
                <label for="fecha">Fecha</label>
            </div>
        </div>

        <div class="col">
            <select class="form-select" id="diaSemana" name="dia" aria-label="Default select example" disabled>
                <option selected>Elige un dia de la semana</option>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miercoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sabado">Sabado</option>
                <option value="Domingo">Domingo</option>
            </select>
        </div>

        <div class="col">
            <div class="form-floating mb-3">
                <input type="time" class="form-control" id="hora" name="hora" required>
                <label for="hora">Hora</label>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <div class="col-5">
            <select class="form-select" id="tipoEvento" name="tipo_evento" aria-label="Default select example">
                <option selected>Tipo de evento</option>
                <option value="1">Liga normal</option>
                <option value="2">Visita</option>
                <option value="3">Concentración</option>
                <option value="4">Venta</option>
                <option value="5">Liga unida</option>
            </select>
        </div>
    </div>

    <!-- Formulario para Liga normal -->
    <div id="formLigaNormal" class="evento-form">
        <h5>Formulario para Liga Normal</h5>
        <div class="mb-3">
            <div class="row">
                <div class="col-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lugar" name="lugar" placeholder="cancha, iglesia">
                        <label for="floatingInput">Lugar:</label>
                    </div>
                </div>
                <div class="col-4">
                    <select class="form-select" aria-label="Default select example" id="direccion" name="direccion">
                        <option selected value="">Direccion</option>
                        @foreach ($jovenes as $joven)
                        <option value="{{ $joven->id_joven }}">{{ $joven->nombre }} {{ $joven->apellidos }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <select class="form-select" aria-label="Default select example" id="dinamicas" name="dinamicas">
                        <option selected value="">Dinamicas</option>
                        @foreach ($jovenes as $joven)
                        <option value="{{ $joven->id_joven }}">{{ $joven->nombre }} {{ $joven->apellidos }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <select class="form-select" aria-label="Default select example" id="mensaje" name="mensaje">
                        <option selected value="">Mensaje</option>
                        @foreach ($jovenes as $joven)
                        <option value="{{ $joven->id_joven }}">{{ $joven->nombre }} {{ $joven->apellidos }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-6">
                    <select class="form-select" aria-label="Default select example" id="alabanza" name="alabanza">
                        <option selected value="">Alabanza</option>
                        <option value="0">Luz y gloria</option>
                        @foreach ($jovenes as $joven)
                        <option value="{{ $joven->id_joven }}">{{ $joven->nombre }} {{ $joven->apellidos }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario para Visita -->
    <div id="formVisita" class="evento-form">
        <h5>Formulario para Visita</h5>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="visitaLugar" name="visita_lugar" placeholder="Lugar de la visita">
            <label for="visitaLugar">Lugar de la visita</label>
        </div>
        <!-- Agregar más campos si es necesario -->
    </div>

    <!-- Formulario para Liga Unida -->
    <div id="formLigaUnida" class="evento-form">
        <h5>Formulario para Liga Unida</h5>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="ligaUnidaNombre" name="liga_unida_nombre" placeholder="Nombre de la liga unida">
            <label for="ligaUnidaNombre">Nombre de la liga unida</label>
        </div>
        <!-- Agregar más campos si es necesario -->
    </div>

    <!-- Formulario para Concentración -->
    <div id="formConcentracion" class="evento-form">
        <h5>Formulario para Concentración</h5>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="concentracionLugar" name="concentracion_lugar" placeholder="Lugar de la concentración">
            <label for="concentracionLugar">Lugar de la concentración</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="concentracionTema" name="concentracion_tema" placeholder="Tema de la concentración">
            <label for="concentracionTema">Tema de la concentración</label>
        </div>
        <!-- Agregar más campos si es necesario -->
    </div>

    <!-- Formulario para Venta -->
    <div id="formVenta" class="evento-form">
        <h5>Formulario para Venta</h5>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="producto" name="producto" placeholder="Producto en venta">
            <label for="ventaProducto">Producto en venta</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="precio_producto" name="precio_producto" placeholder="Precio del producto">
            <label for="ventaPrecio">Precio del producto</label>
        </div>
        <!-- Agregar más campos si es necesario -->
    </div>

    <button type="submit" class="btn btn-primary">Agendar</button>
</form>

<script src="{{asset('js/select.js')}}"></script>
<script src="{{asset('js/formularios.js')}}"></script>
@endsection