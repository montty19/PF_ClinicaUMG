<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales = Sucursal::all();
        return view('sucursal.index')->with('sucursales', $sucursales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursales = new Sucursal();
        $sucursales->num_sucursal = $request->get('txt_numero');
        $sucursales->direccion = $request->get('txt_direccion');
        $sucursales->departamento = $request->get('txt_departamento');
        $sucursales->telefono = $request->get('txt_telefono');
        $sucursales->save();
        return redirect('/sucursales');
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
        $sucursal = Sucursal::find($id);
        return view('sucursal.edit')->with('sucursal',$sucursal);
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
        $sucursal = Sucursal::find($id);
        $sucursal->num_sucursal = $request->get('txt_numero');
        $sucursal->direccion = $request->get('txt_direccion');
        $sucursal->departamento = $request->get('txt_departamento');
        $sucursal->telefono = $request->get('txt_telefono');
        $sucursal->save();
        return redirect('/sucursales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal =  Sucursal::find($id);
        $sucursal->delete();
        return redirect('/sucursales');
    }
}
