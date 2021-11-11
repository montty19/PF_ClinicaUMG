@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Crear Paciente</h1>
@stop

@section('content')
<form action="/pacientes" method="POST">
@csrf

<div class="mb-3">
          <label for="lbl_DPI" class="form-label"><b>DPI</b></label>
          <input type="text" name="txt_DPI" id="txt_DPI" class="form-control" placeholder="DPI: 2906258880104">
          </div>

          <div class="mb-3">
          <label for="lbl_nombre" class="form-label"><b>Nombre</b></label>
          <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" placeholder="Nombre: Nombre Apellido">
          </div>

          <div class="mb-3">
          <label for="lbl_telefono" class="form-label"><b>Telefono</b></label>
          <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" placeholder="Telefono: 25158575  ">
          </div>

          <div class="mb-3">
          <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
          <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="Direccion: Antigua Guatemala ">
          </div>

          <div class="mb-3">
          <label for="lbl_correo_electronico" class="form-label"><b>Correo Electronico</b></label>
          <input type="text" name="txt_correo_electronico" id="txt_correo_electronico" class="form-control" placeholder="Correo Electronico: nombre.apellido@gmail.com">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/pacientes"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop