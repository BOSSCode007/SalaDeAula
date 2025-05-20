<?php

namespace App\Http\Controllers;

use App\Models\reservations;
use Illuminate\Http\Request;

class reservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = new reservations();
        $reservations = $reservations->all();

        return view('index', compact(['reservations']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $reservations = new reservations();
        $reservations->aula = $request->aula;
        $reservations->data = $request->data;
        $reservations->horario = $request->horario;
        $reservations->professor = $request->professor;
       
        $reservations->save();
        
        return redirect()->route('reservations.index')->with('success', 'Reserva criada com sucesso!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
