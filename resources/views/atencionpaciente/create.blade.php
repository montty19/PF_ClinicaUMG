@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Atencion de Paciente</h1>
@stop

@section('content')
<form action="/atencionpacientes" method="POST">
@csrf

          <div class="mb-3">
          <label for="lbl_atencion" class="form-label"><b>Numero Atencion</b></label>
          <input type="text" name="txt_atencion" id="txt_atencion" class="form-control">
          </div>

          <div class="mb-3">
          <label for="lbl_examen" class="form-label"><b>Numero Cita</b></label>
          <input type="text" name="txt_cita" id="txt_examen" class="form-control">
          </div>


          <div class="mb-3">
          <label for="lbl_diagnostico" class="form-label"><b>DPI</b></label>
          <input type="text" name="txt_dpi" id="txt_diagnostico" class="form-control">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/atencionpacientes"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop