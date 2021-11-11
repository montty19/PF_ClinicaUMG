@extends('adminlte::page')

@section('title', 'CLINICA UMG')

@section('content_header')
    <h1>Crear Cita</h1>
@stop

@section('content')
<form action="/citas" method="POST"> 
@csrf
<div class="mb-3">
          <label for="lbl_numero" class="form-label"><b>Número de Cita</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" class="form-control" tabindex="1">
          </div>

          <div class="mb-3">
          <label for="lbl_dpi" class="form-label"><b>DPI</b></label>
          <input type="text" name="txt_dpi" id="txt_dpi" class="form-control"  class="form-control" tabindex="2">
          </div>

          <div class="mb-3">
          <label for="lbl_fecha" class="form-label"><b>Fecha de Cita</b></label>
          <input type="text" name="txt_fecha" id="txt_fecha" class="form-control"  class="form-control" tabindex="3">
          </div>

          <div class="mb-3">
          <label for="lbl_hora" class="form-label"><b>Hora de Cita</b></label>
          <input type="text" name="txt_hora" id="txt_hora" class="form-control"  class="form-control" tabindex="4">
          </div>

          <div class="mb-3">
          <button type="submit"  class="btn btn-primary" >Guardar</button>
          <a href="/citas"  class="btn btn-danger">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop