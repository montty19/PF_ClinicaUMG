@extends('adminlte::page')

@section('title', 'Editar Citas')

@section('content_header')
    <h1>Editar Datos de Citas</h1>
@stop

@section('content')
<form action="/citas/{{$cita->id}}" method="POST">
@csrf
@method('PUT')
          <div class="mb-3">
          <label for="lbl_numero" class="form-label"><b>Número de Cita</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" value="{{$cita->num_cita}}">
          </div>

          <div class="mb-3">
          <label for="lbl_dpi" class="form-label"><b>DPI</b></label>
          <input type="text" name="txt_dpi" id="txt_dpi" class="form-control"  value="{{$cita->DPI}}">
          </div>

          <div class="mb-3">
          <label for="lbl_fecha" class="form-label"><b>Fecha de Cita</b></label>
          <input type="text" name="txt_fecha" id="txt_fecha" class="form-control"  value="{{$cita->fecha}}">
          </div>

          <div class="mb-3">
          <label for="lbl_hora" class="form-label"><b>Hora de Cita</b></label>
          <input type="text" name="txt_hora" id="txt_hora" class="form-control"  value="{{$cita->hora}}">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/citas"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop