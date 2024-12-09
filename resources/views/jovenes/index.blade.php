@extends("plantillas.plantilla1")

@section("con1")
<style>
    .card {
        transition: transform 0.3s ease;
    }

    .card .card-body {
        transition: background-color 0.3s ease;
        border-radius: 5px;
    }

    .card-title,
    .card-text {
        transition: color 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card:hover .card-body {
        background-color: #545C56;
        border-radius: 5px;
    }

    .card:hover .card-title,
    .card:hover .card-text {
        color: #FFFFFF;
    }
</style>
<header class="d-flex justify-content-between">
    <h4>Hombres: </h4>

    <h4>Total: </h4>

    <h4>Mujeres: </h4>
</header>

<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center" id="empleadosContainer">
        @foreach($jovenes as $joven)
        <div class="col">
            <a style="text-decoration: none;" href="">
                <div class="card h-100">
                    <img src="{{ $joven->foto ? asset('storage/' . $joven->foto) : asset('img/usuario.png') }}" class="card-img-top" alt="Foto de {{ $joven->nombre }} {{ $joven->apellido }}">
                    <div class="card-body">
                        <h5 class="card-title l">{{$joven->nombre}} {{$joven->apellidos}}</h5>
                        <h6 class="card-text" data-label="Edad"><strong>Edad:</strong> {{$joven->edad}} años</h6>
                        <h6 class="card-text" data-label="Teléfono"><strong>Teléfono:</strong> {{$joven->telefono}}</h6>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection