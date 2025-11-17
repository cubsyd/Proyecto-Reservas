<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::with('espacio')->paginate(10);
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $espacios = Espacio::all();
    return view('reservas.create', compact('espacios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'espacio_id' => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha' => 'required|date',
            'horaInicio' => 'required|date_format:H:i',
            'horaFin' => 'required|date_format:H:i',
            'motivo' => 'nullable|string|max:255',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index')->with('ok', 'Reserva creada correctamente.');
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
    public function edit(Reserva $reserva)
    {
        $espacios = Espacio::all();
        return view('reservas.edit', compact('reserva', 'espacios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reserva $reserva)
    {
        $request->validate([
            'espacio_id' => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha' => 'required|date',
            'horaInicio' => 'required|date_format:H:i',
            'horaFin' => 'required|date_format:H:i',
            'motivo' => 'nullable|string|max:255',
        ]);

        $reserva->update($request->all());

        return redirect()->route('reservas.index')->with('ok', 'Reserva actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reserva $reserva)
    {
        $reserva->delete();

        return redirect()->route('reservas.index')->with('ok', 'Reserva eliminada correctamente.');
    }
}
