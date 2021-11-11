<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadoSucursal;

class EmpleadoSucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleadosucursales = EmpleadoSucursal::all();
        return view('empleadosucursal.index')->with('empleadosucursales',$empleadosucursales);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleadosucursal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleadosucursales = new EmpleadoSucursal();

        $empleadosucursales->num_sucursal = $request->get('txt_sucursal');
        $empleadosucursales->num_empleado = $request->get('txt_empleado');
        $empleadosucursales->id_puesto = $request->get('txt_idpuesto');
        $empleadosucursales->save();

        return redirect('/empleadosucursales');
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
        $empleadosucursal = EmpleadoSucursal::find($id);
        return view('empleadosucursal.edit')->with('empleadosucursal',$empleadosucursal);
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
        $empleadosucursal = EmpleadoSucursal::find($id);

        $empleadosucursal->num_sucursal = $request->get('txt_sucursal');
        $empleadosucursal->num_empleado = $request->get('txt_empleado');
        $empleadosucursal->id_puesto = $request->get('txt_idpuesto');
        $empleadosucursal->save();

        return redirect('/empleadosucursales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleadosucursal = EmpleadoSucursal::find($id);
        $empleadosucursal->delete();
        return redirect('/empleadosucursales');
    }
}
