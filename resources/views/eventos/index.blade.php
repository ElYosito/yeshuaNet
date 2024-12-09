@extends("plantillas.plantilla1")

@section("con1")

<style>
    .boton {
        width: auto;
        /* Cambia de 100% a auto para ajustar al contenido */
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
        /* Añade padding para un mejor ajuste */
    }

    .boton ion-icon {
        min-width: 50px;
        font-size: 25px;
    }

    .d-flex {
        display: flex;
        justify-content: flex-end;
        /* Alinea el botón a la derecha */
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


@endsection