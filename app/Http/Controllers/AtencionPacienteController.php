<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AtencionPaciente;

class AtencionPacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atencionpacientes = AtencionPaciente::all();
        return view('atencionpaciente.index')->with('atencionpacientes',$atencionpacientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atencionpaciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atencionpacientes = new AtencionPaciente();
        $atencionpacientes->num_atencion = $request->get('txt_atencion');
        $atencionpacientes->num_cita = $request->get('txt_cita');  
        $atencionpacientes->DPI = $request->get('txt_dpi');
        $atencionpacientes->save();
        return redirect('/atencionpacientes');
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
        $atencionpaciente = AtencionPaciente::find($id);
        return view('atencionpaciente.edit')->with('atencionpaciente',$atencionpaciente);

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
        $atencionpaciente =  AtencionPaciente::find($id);
        $atencionpaciente->num_atencion = $request->get('txt_atencion');
        $atencionpaciente->num_cita = $request->get('txt_cita');  
        $atencionpaciente->DPI = $request->get('txt_dpi');
        $atencionpaciente->save();
        return redirect('/atencionpacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atencionpaciente = atencionpaciente::find($id);
        $atencionpaciente->delete();
        return redirect('/atencionpacientes');
    }
}
