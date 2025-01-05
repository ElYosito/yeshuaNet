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
        justify-content: flex-end;
    }
</style>

<div class="d-flex">
    <a class="text-decoration-none" href="eventos/create">
        <button class="boton">
            <ion-icon name="add-outline"></ion-icon>
            <span>Agregar Liga</span>
        </button>
    </a>
</div>

<h5>Ligas Normales</h5>
<div class="accordion" id="accordionLigaNormal">
    @foreach($eventosLigaNormal as $index => $evento)
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingLiga{{ $index }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLiga{{ $index }}" aria-expanded="false" aria-controls="collapseLiga{{ $index }}">
                Liga en {{ $evento->detalles->lugar ?? 'No definido' }}, tipo de liga: {{ $evento->tipo_evento }}
            </button>
        </h2>
        <div id="collapseLiga{{ $index }}" class="accordion-collapse collapse" aria-labelledby="headingLiga{{ $index }}" data-bs-parent="#accordionLigaNormal">
            <div class="accordion-body">
                <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('d F Y') }} <br>
                <strong>Día:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('l') }} <br>
                <strong>Hora:</strong> {{ \Carbon\Carbon::parse($evento->hora)->format('h:i A') }} <br>
                <strong>Lugar:</strong> {{ $evento->detalles->lugar ?? 'No definido' }} <br>
                <strong>Dirección:</strong> {{ $evento->detalles->direccionJoven->nombre ?? 'Todos' }} <br>
                <strong>Dinámicas:</strong> {{ $evento->detalles->dinamicasJoven->nombre ?? 'No definidas' }} <br>
                <strong>Mensaje:</strong> {{ $evento->detalles->mensajeJoven->nombre ?? 'Herman@ de la iglesia' }} <br>
                <strong>Alabanza:</strong> {{ $evento->detalles->mensajeJoven->alabanza ?? 'Luz y fuego' }}
            </div>
        </div>
    </div>
    @endforeach
</div>

<h5 class="mt-4">Ventas</h5>
<div class="accordion" id="accordionVentas">
    @foreach($eventosVentas as $index => $evento)
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingVenta{{ $index }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVenta{{ $index }}" aria-expanded="false" aria-controls="collapseVenta{{ $index }}">
                Tipo de evento: {{ $evento->tipo_evento }}
            </button>
        </h2>
        <div id="collapseVenta{{ $index }}" class="accordion-collapse collapse" aria-labelledby="headingVenta{{ $index }}" data-bs-parent="#accordionVentas">
            <div class="accordion-body">
                <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('d F Y') }} <br>
                <strong>Día:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('l') }} <br>
                <strong>Hora:</strong> {{ \Carbon\Carbon::parse($evento->hora)->format('h:i A') }} <br>
                <strong>Producto:</strong> {{ $evento->detalles->producto ?? 'No definido' }} <br>
                <strong>Precio:</strong> ${{ $evento->detalles->precio_producto ?? 'No definido' }} Pesos
            </div>
        </div>
    </div>
    @endforeach
</div>

<h5 class="mt-4">Concentraciones</h5>
<div class="accordion" id="accordionConcentra">
    @foreach($eventosConcentra as $index => $evento)
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingVenta{{ $index }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseConcentra{{ $index }}" aria-expanded="false" aria-controls="collapseConcentra{{ $index }}">
                Tipo de evento: {{ $evento->tipo_evento }}
            </button>
        </h2>
        <div id="collapseConcentra{{ $index }}" class="accordion-collapse collapse" aria-labelledby="headingConcentra{{ $index }}" data-bs-parent="#accordionConcentra">
            <div class="accordion-body">
                <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('d F Y') }} <br>
                <strong>Día:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('l') }} <br>
                <strong>Hora:</strong> {{ \Carbon\Carbon::parse($evento->hora)->format('h:i A') }} <br>
                <strong>Lugar:</strong> {{ $evento->detalles->lugarConcentra ?? 'No definido' }} <br>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection