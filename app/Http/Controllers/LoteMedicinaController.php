<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoteMedicina;

class LoteMedicinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotemedicinas = LoteMedicina::all();
        return view('lotemedicina.index')->with('lotemedicinas',$lotemedicinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lotemedicina.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lotemedicinas = new LoteMedicina();

        $lotemedicinas->num_lote = $request->get('txt_lote');
        $lotemedicinas->tipo = $request->get('txt_tipo');
        $lotemedicinas->fecha_vencimiento = $request->get('txt_vence');
        $lotemedicinas->fecha_entrada = $request->get('txt_entrada');
        
        $lotemedicinas->save();

        return redirect('/lotemedicinas');
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
        $lotemedicina = LoteMedicina::find($id);
        return view('lotemedicina.edit')->with('lotemedicina',$lotemedicina);
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
        $lotemedicina =  LoteMedicina::find($id);

        $lotemedicina->num_lote = $request->get('txt_lote');
        $lotemedicina->tipo = $request->get('txt_tipo');
        $lotemedicina->fecha_vencimiento = $request->get('txt_vence');
        $lotemedicina->fecha_entrada = $request->get('txt_entrada');
        
        $lotemedicina->save();

        return redirect('/lotemedicinas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lotemedicina = lotemedicina::find($id);
        $lotemedicina->delete();
        return redirect('/lotemedicinas');
    }
}
