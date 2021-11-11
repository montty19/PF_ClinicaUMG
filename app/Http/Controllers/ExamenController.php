<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Examen;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examenes=Examen::all();
        return view('examen.index')->with('examenes', $examenes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $examenes = new Examen();
       $examenes->num_examen = $request->get('txt_numexamen');
       $examenes->tipo = $request->get('txt_tipo');
       $examenes->descripcion = $request->get('txt_descripcion');
       $examenes->fecha_examen = $request->get('txt_fecha');
       $examenes->save();
       return redirect('/examenes'); 
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
        $examen = Examen::find($id);
        return view('examen.edit')->with('examen',$examen);
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
        $examen =  Examen::find($id);
        $examen->num_examen = $request->get('txt_numexamen');
        $examen->tipo = $request->get('txt_tipo');
        $examen->descripcion = $request->get('txt_descripcion');
        $examen->fecha_examen = $request->get('txt_fecha');
        $examen->save();
        return redirect('/examenes');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $examen =  Examen::find($id);
        $examen->delete();
        return redirect('/examenes');
    }
}
