<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados=Empleado::all();
        return view('empleado.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleado();
        $empleados->num_empleado = $request->get('txt_numero');
        $empleados->nombre = $request->get('txt_nombre');
        $empleados->telefono = $request->get('txt_telefono');
        $empleados->direccion = $request->get('txt_direccion');
        $empleados->correo_electronico = $request->get('txt_correo');
        $empleados->save();
        return redirect('/empleados'); 
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
        $empleado = Empleado::find($id);
        return view('empleado.edit')->with('empleado',$empleado);
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
        $empleado = Empleado::find($id);
        $empleado->num_empleado = $request->get('txt_numero');
        $empleado->nombre = $request->get('txt_nombre');
        $empleado->telefono = $request->get('txt_telefono');
        $empleado->direccion = $request->get('txt_direccion');
        $empleado->correo_electronico = $request->get('txt_correo');
        $empleado->save();
        return redirect('/empleados'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado =  Empleado::find($id);
        $empleado->delete();
        return redirect('/empleados');
    }
}
