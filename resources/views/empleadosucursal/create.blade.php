@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Empleados por Sucursales</h1>
@stop

@section('content')
<form action="/empleadosucursales" method="POST">
@csrf

          <div class="mb-3">
          <label for="lbl_sucursal" class="form-label"><b>Numero de Sucursal</b></label>
          <input type="text" name="txt_sucursal" id="txt_sucursal" class="form-control"  >
          </div>

          <div class="mb-3">
          <label for="lbl_empleado" class="form-label"><b>Número de Empleado</b></label>
          <input type="text" name="txt_empleado" id="txt_empleado" class="form-control"  >
          </div>

          <div class="mb-3">
          <label for="lbl_num_lote" class="form-label"><b>ID de Puesto</b></label>
          <input type="text" name="txt_idpuesto" id="txt_idpuesto" class="form-control"  >
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/empleadosucursales"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop