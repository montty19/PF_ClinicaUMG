@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Empleados por Sucursal</h1>
@stop

@section('content')
<form action="/empleadosucursales/{{$empleadosucursal->id}}" method="POST">
@csrf
@method('PUT')

          <div class="mb-3">
          <label for="lbl_sucursal" class="form-label"><b>Numero de Sucursal</b></label>
          <input type="text" name="txt_sucursal" id="txt_sucursal" class="form-control"  value="{{$empleadosucursal->num_sucursal}}">
          </div>

          <div class="mb-3">
          <label for="lbl_empleado" class="form-label"><b>Número de Empleado</b></label>
          <input type="text" name="txt_empleado" id="txt_empleado" class="form-control" value="{{$empleadosucursal->num_empleado}}" >
          </div>

          <div class="mb-3">
          <label for="lbl_num_lote" class="form-label"><b>ID de Puesto</b></label>
          <input type="text" name="txt_idpuesto" id="txt_idpuesto" class="form-control" value="{{$empleadosucursal->id_puesto}}" >
          </div>

          <div class="mb-3">
          <button type="submit"  class="btn btn-primary" >Guardar</button>
          <a href="/empleadosucursales"  class="btn btn-danger">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop