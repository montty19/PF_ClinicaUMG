@extends('adminlte::page')

@section('title', 'CLINICA UMG')

@section('content_header')
<h1>Crear Nuevo Empleado</h1>
@stop

@section('content')
<form action="/empleados" method="POST"> 
@csrf
<div class="mb-3">
          <label for="lbl_num" class="form-label"><b>Numero de Empleado</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" tabindex="1">
          </div>

          <div class="mb-3">
          <label for="lbl_nombre" class="form-label"><b>Nombre del Empleado</b></label>
          <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" tabindex="2">
          </div>

          <div class="mb-3">
          <label for="lbl_telefono" class="form-label"><b>Telefono Empleado</b></label>
          <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" tabindex="3">
          </div>

          <div class="mb-3">
          <label for="lbl_direccion" class="form-label"><b>Dirección</b></label>
          <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" tabindex="4">
          </div>

          <div class="mb-3">
          <label for="lbl_correo" class="form-label"><b>Correo Electrónico</b></label>
          <input type="text" name="txt_correo" id="txt_correo" class="form-control" tabindex="5">
          </div>
          
          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/empleados"  class="btn btn-danger" tabindex="6">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop