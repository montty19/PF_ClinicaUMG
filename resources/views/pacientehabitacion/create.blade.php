@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Crear Paciente por habitación</h1>
@stop

@section('content')
<form action="/pacienteshabitaciones" method="POST">
@csrf

          <div class="mb-3">
          <label for="lbl_numero" class="form-label"><b>Numero Habitacion</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control">
          </div>

          <div class="mb-3">
          <label for="lbl_dpi" class="form-label"><b>DPI</b></label>
          <input type="text" name="txt_dpi" id="txt_dpi" class="form-control">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/pacienteshabitaciones"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop