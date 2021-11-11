@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Editar Paciente</h1>
@stop

@section('content')
<form action="/pacienteshabitaciones/{{$pacientehabitacion->id}}" method="POST">
@csrf
@method('PUT')
         <div class="mb-3">
          <label for="lbl_nombre" class="form-label"><b>Numero habitacion</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control"  value="{{$pacientehabitacion->num_habitacion}}">
          </div>
          <div class>
          <label for="lbl_DPI" class="form-label"><b>DPI</b></label>
          <input type="text" name="txt_dpi" id="txt_dpi" class="form-control" value="{{$pacientehabitacion->DPI}}">
          </div>

         <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/pacienteshabitaciones"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop