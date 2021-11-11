<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
         
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('paciente.index')->with('pacientes',$pacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();

        $pacientes->DPI = $request->get('txt_DPI');
        $pacientes->nombre = $request->get('txt_nombre');
        $pacientes->telefono = $request->get('txt_telefono');
        $pacientes->direccion = $request->get('txt_direccion');
        $pacientes->correo_electronico = $request->get('txt_correo_electronico');
        
        $pacientes->save();

        return redirect('/pacientes');
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
        $paciente = Paciente::find($id);
        return view('paciente.edit')->with('paciente',$paciente);

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
        $paciente = Paciente::find($id);

        $paciente->DPI = $request->get('txt_DPI');
        $paciente->nombre = $request->get('txt_nombre');
        $paciente->telefono = $request->get('txt_telefono');
        $paciente->direccion = $request->get('txt_direccion');
        $paciente->correo_electronico = $request->get('txt_correo_electronico');
        
        $paciente->save();

        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = paciente::find($id);
        $paciente->delete();
        return redirect('/pacientes');
    }
}
