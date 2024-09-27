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
        return view('jovenes/index', compact('jovenes'));
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
        //
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
