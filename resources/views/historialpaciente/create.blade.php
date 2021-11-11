@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Historial del  Paciente</h1>
@stop

@section('content')
<form action="/historialpacientes" method="POST">
@csrf

          <div class="mb-3">
          <label for="lbl_atencion" class="form-label"><b>Numero Atencion</b></label>
          <input type="text" name="txt_atencion" id="txt_atencion" class="form-control">
          </div>

          <div class="mb-3">
          <label for="lbl_numero" class="form-label"><b>Numero Examen</b></label>
          <input type="text" name="txt_examen" id="txt_cita" class="form-control">
          </div>


          <div class="mb-3">
          <label for="lbl_dpi" class="form-label"><b>Diagnostico</b></label>
          <input type="text" name="txt_diagnostico" id="txt_dpi" class="form-control">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/historialpacientes"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop