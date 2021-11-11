@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Atencion de Paciente</h1>
@stop

@section('content')
<form action="/atencionpacientes/{{$atencionpaciente->id}}" method="POST">
@csrf
@method('PUT')
         <div class="mb-3">
          <label for="lbl_atencion" class="form-label"><b>Número de Atencion</b></label>
          <input type="text" name="txt_atencion" id="txt_atencion" class="form-control"  value="{{$atencionpaciente->num_atencion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_examen" class="form-label"><b>Número Cita</b></label>
          <input type="text" name="txt_cita" id="txt_cita" class="form-control"  value="{{$atencionpaciente->num_cita}}">
          </div>
          
          <div class>
          <label for="lbl_diagnostico" class="form-label"><b>Número de Diagnostico</b></label>
          <input type="text" name="txt_dpi" id="txt_dpi" class="form-control" value="{{$atencionpaciente->DPI}}">
          </div>

         <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/atencionpacientes"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop