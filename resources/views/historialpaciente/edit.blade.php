@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Historial de Paciente</h1>
@stop

@section('content')
<form action="/historialpacientes/{{$historialpaciente->id}}" method="POST">
@csrf
@method('PUT')
         <div class="mb-3">
          <label for="lbl_atencion" class="form-label"><b>Numero de Atencion</b></label>
          <input type="text" name="txt_atencion" id="txt_atencion" class="form-control"  value="{{$historialpaciente->num_atencion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_cita" class="form-label"><b>Numero Cita</b></label>
          <input type="text" name="txt_examen" id="txt_examen" class="form-control"  value="{{$historialpaciente->num_examen}}">
          </div>
          
          <div class>
          <label for="lbl_dpi" class="form-label"><b>Diagnostico</b></label>
          <input type="text" name="txt_diagnostico" id="txt_diagnostico" class="form-control" value="{{$historialpaciente->num_diagnostico}}">
          </div>

         <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/historialpacientes"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop