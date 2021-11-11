@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Nuevo Ingreso a Habitacion</h1>
@stop

@section('content')
<form action="/habitaciones" method="POST">
@csrf

<div class="mb-3">
          <label for="lbl_num" class="form-label"><b>Numero de Habitación</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control">
          </div>

          <div class="mb-3">
          <label for="lbl_nivel" class="form-label"><b>Nivel Habitación</b></label>
          <input type="text" name="txt_nivel" id="txt_nivel" class="form-control" >
          </div>

          <div class="mb-3">
          <label for="lbl_cantidad" class="form-label"><b>Cantidad de pacientes</b></label>
          <input type="text" name="txt_cantidad" id="txt_cantidad" class="form-control">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/habitaciones"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop