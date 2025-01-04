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

<div class="accordion" id="accordionExample">
    @foreach($eventos as $index => $evento)
    <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{ $index }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                Liga en {{ $evento->detalles->lugar ?? 'No definido' }}, tipo de liga: {{ $evento->tipo_evento }}
            </button>
        </h2>
        <div id="collapse{{ $index }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('d F Y') }} <br>
                <strong>Día:</strong> {{ \Carbon\Carbon::parse($evento->fecha)->translatedFormat('l') }} <br>
                <strong>Hora:</strong> {{ \Carbon\Carbon::parse($evento->hora)->format('h:i A') }} <br>
                <strong>Lugar:</strong> {{ $evento->detalles->lugar ?? 'No definido' }} <br>
                <strong>Dirección:</strong> {{ $evento->detalles->direccionJoven->nombre ?? 'No definida' }} <br>
                <strong>Dinámicas:</strong> {{ $evento->detalles->dinamicasJoven->nombre ?? 'No definidas' }} <br>
                <strong>Mensaje:</strong> {{ $evento->detalles->mensajeJoven->nombre ?? 'No definido' }}
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection