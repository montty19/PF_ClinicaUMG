@extends('adminlte::page')

@section('title', 'Habitaciones')

@section('content_header')
    <h1>Editar Datos Habitacion</h1>
@stop

@section('content')
<form action="/habitaciones/{{$habitacion->id}}" method="POST">
@csrf
@method('PUT')

          <div class="mb-3">
          <label for="lbl_DPI" class="form-label"><b>Númoer Habitación</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" value="{{$habitacion->num_habitacion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_nivel" class="form-label"><b>Nivel</b></label>
          <input type="text" name="txt_nivel" id="txt_nivel" class="form-control" value="{{$habitacion->nivel}}">
          </div>

          <div class="mb-3">
          <label for="lbl_cantidad" class="form-label"><b>Cantidad de pacientes</b></label>
          <input type="text" name="txt_cantidad" id="txt_cantidad" class="form-control"  value="{{$habitacion->cant_pacientes}}">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/habitaciones"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop