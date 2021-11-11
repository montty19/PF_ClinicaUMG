<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cita;

class CitaController extends Controller

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
        $citas=Cita::all();
        return view('cita.index')->with('citas', $citas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $citas = new Cita();
        $citas->num_cita = $request->get('txt_numero');
        $citas->DPI = $request->get('txt_dpi');
        $citas->fecha = $request->get('txt_fecha');
        $citas->hora = $request->get('txt_hora');
        $citas->save();
        return redirect('/citas'); 
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
        $cita = Cita::find($id);
        return view('cita.edit')->with('cita',$cita);
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
        $cita =  Cita::find($id);
        $cita->num_cita = $request->get('txt_numero');
        $cita->DPI = $request->get('txt_dpi');
        $cita->fecha = $request->get('txt_fecha');
        $cita->hora = $request->get('txt_hora');
        $cita->save();
        return redirect('/citas'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();
        return redirect('/citas');
    }
}
