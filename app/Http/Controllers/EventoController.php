<?php

namespace App\Http\Controllers;

use App\Models\detalle_evento;
use App\Models\evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los eventos de tipo "Liga normal"
        $eventosLigaNormal = evento::with('detalles')->where('tipo_evento', 'Liga normal')->get();

        // Obtener los eventos de tipo "ventas"
        $eventosVentas = evento::with('detalles')->where('tipo_evento', 'venta')->get();

        $eventosConcentra = evento::with('detalles')->where('tipo_evento', 'Concentracion')->get();

        // Retornar la vista con ambos conjuntos de eventos
        return view('eventos.index', compact('eventosLigaNormal', 'eventosVentas', 'eventosConcentra'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jovenes = DB::table('jovenes')->select('id_joven', 'nombre', 'apellidos')->get();
        return view('eventos.create', compact('jovenes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo_evento' => 'nullable',
            'fecha' => 'nullable',
            'hora' => 'nullable',
            'lugar' => 'nullable',
            'direccion' => 'nullable',
            'dinamicas' => 'nullable',
            'mensajes' => 'nullable',
            'alabanza' => 'nullable',
            'producto' => 'nullable',
            'precio_producto' => 'nullable'
        ]);

        $evento = evento::create([
            'tipo_evento' => $request->tipo_evento,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
        ]);

        // Insertar en detalle_eventos
        DB::table('detalle_eventos')->insert([
            'id_evento' => $evento->id, // El ID del evento recién creado
            'lugar' => $request->lugar ?? null, // Valores opcionales como NULL si no están definidos
            'direccion' => $request->direccion ?? null,
            'dinamicas' => $request->dinamicas ?? null,
            'mensaje' => $request->mensaje ?? null,
            'alabanza' => $request->alabanza ?? null,
            'producto' => $request->producto ?? null,
            'precio_producto' => $request->precio_producto ?? null,
        ]);

        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(evento $evento)
    {
        //
    }
}
