<?php

namespace App\Http\Controllers;

use App\Models\jovenes;
use Illuminate\Http\Request;

class JovenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jovenes = jovenes::all();
        return view('jovenes.index', compact('jovenes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'nullable',
            'fecha_nacimiento' => 'nullable',
            'direccion' => 'nullable',
            'ultima_asistencia' => 'nullable',
            'telefono' => 'nullable'
        ]);

        $joven = new jovenes();
        $joven->nombre = $request->nombre;
        $joven->apellidos = $request->apellidos;
        $joven->fecha_nacimiento = $request->fecha_nacimiento;
        $joven->direccion = $request->direccion;
        $joven->ultima_asistencia = $request->ultima_asistencia;
        $joven->genero = $request->has('genero') ? 'Mujer' : 'Hombre';
        $joven->telefono = $request->telefono;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('fotos', 'public');
            $joven->foto = $path;
        }

        $joven->save();

        return redirect()->route('jovenes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(jovenes $jovenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jovenes $jovenes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jovenes $jovenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jovenes $jovenes)
    {
        //
    }
}
