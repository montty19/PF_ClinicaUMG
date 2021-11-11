<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistorialPaciente;


class HistorialPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historialpacientes=HistorialPaciente::all();
        return view('historialpaciente.index')->with('historialpacientes', $historialpacientes);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historialpaciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historialpacientes = new HistorialPaciente();
        $historialpacientes->num_atencion = $request->get('txt_atencion');
        $historialpacientes->num_examen = $request->get('txt_examen');
        $historialpacientes->num_diagnostico = $request->get('txt_diagnostico');
        $historialpacientes->save();
        return redirect('/historialpacientes'); 
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
        $historialpaciente = HistorialPaciente::find($id);
        return view('historialpaciente.edit')->with('historialpaciente',$historialpaciente);
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
        $historialpaciente =  HistorialPaciente::find($id);
        $historialpaciente->num_atencion = $request->get('txt_atencion');
        $historialpaciente->num_examen = $request->get('txt_examen');
        $historialpaciente->num_diagnostico = $request->get('txt_diagnostico');
        $historialpaciente->save();
        return redirect('/historialpacientes'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $historialpaciente =  HistorialPaciente::find($id);
        $historialpaciente->delete();
        return redirect('/historialpacientes');
    }
}
