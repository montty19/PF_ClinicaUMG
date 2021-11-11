<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PacienteHabitacion;

class PacienteHabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacienteshabitaciones = PacienteHabitacion::all();
        return view('pacientehabitacion.index')->with('pacienteshabitaciones',$pacienteshabitaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        return view('pacientehabitacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacienteshabitaciones = new PacienteHabitacion();
        $pacienteshabitaciones->num_habitacion = $request->get('txt_numero');
        $pacienteshabitaciones->DPI = $request->get('txt_dpi');  
        $pacienteshabitaciones->save();

        return redirect('/pacienteshabitaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pacientehabitacion = PacienteHabitacion::find($id);
        return view('pacientehabitacion.edit')->with('pacientehabitacion',$pacientehabitacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pacientehabitacion = PacienteHabitacion::find($id);
        $pacientehabitacion->num_habitacion = $request->get('txt_numero');
        $pacientehabitacion->DPI = $request->get('txt_dpi');   
        $pacientehabitacion->save();

        return redirect('/pacienteshabitaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pacientehabitacion = PacienteHabitacion::find($id);
        $pacientehabitacion->delete();
        return redirect('/pacienteshabitaciones');
    }
}
