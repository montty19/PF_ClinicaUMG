@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar datos de Empleado</h1>
@stop

@section('content')
<form action="/empleados/{{$empleado->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
<label for="lbl_numero" class="form-label"><b>Número del Empleado</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" value="{{$empleado->num_empleado}}">
          </div>

          <div class="mb-3">
          <label for="lbl_nombre" class="form-label"><b>Nombre del Empleado</b></label>
          <input type="text" name="txt_nombre" id="txt_nombre" class="form-control"  value="{{$empleado->nombre}}">
          </div>

          <div class="mb-3">
          <label for="lbl_telefono" class="form-label"><b>Telefono Empleado</b></label>
          <input type="text" name="txt_telefono" id="txt_telefono" class="form-control"  value="{{$empleado->telefono}}">
          </div>

          <div class="mb-3">
          <label for="lbl_direccion" class="form-label"><b>Dirección</b></label>
          <input type="text" name="txt_direccion" id="txt_direccion" class="form-control"  value="{{$empleado->direccion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_correo" class="form-label"><b>Correo Electrónico</b></label>
          <input type="text" name="txt_correo" id="txt_correo" class="form-control"  value="{{$empleado->correo_electronico}}">
          </div>

          <div class="mb-3">
          <button type="submit"  class="btn btn-primary" >Guardar</button>
          <a href="/empleados"  class="btn btn-danger">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop