<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostico;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnosticos = Diagnostico::all();
        return view('diagnostico.index')->with('diagnosticos', $diagnosticos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('diagnostico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diagnosticos = new Diagnostico();
        $diagnosticos->num_diagnostico = $request->get('txt_numero');
        $diagnosticos->tipo = $request->get('txt_tipo');
        $diagnosticos->descripcion = $request->get('txt_descripcion');
        $diagnosticos->fecha_diagnostico = $request->get('txt_fecha');
        $diagnosticos->save();
        return redirect('/diagnosticos'); 
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
        $diagnostico = Diagnostico::find($id);
        return view('diagnostico.edit')->with('diagnostico',$diagnostico);
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
        $diagnostico =  Diagnostico::find($id);
        $diagnostico->num_diagnostico = $request->get('txt_numero');
        $diagnostico->tipo = $request->get('txt_tipo');
        $diagnostico->descripcion = $request->get('txt_descripcion');
        $diagnostico->fecha_diagnostico = $request->get('txt_fecha');
        $diagnostico->save();
        return redirect('/diagnosticos');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnostico =  Diagnostico::find($id);
        $diagnostico->delete();
        return redirect('/diagnosticos');
    }
}
