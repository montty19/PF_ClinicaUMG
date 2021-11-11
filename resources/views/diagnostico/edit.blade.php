@extends('adminlte::page')

@section('title', 'Editar Diagnostico')

@section('content_header')
    <h1>Editar Datos de Diagnóstico</h1>
@stop

@section('content')
<form action="/diagnosticos/{{$diagnostico->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
<label for="lbl_numero" class="form-label"><b>Número de Diagnostico</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" value="{{$diagnostico->num_diagnostico}}">
          </div>

          <div class="mb-3">
          <label for="lbl_tipo" class="form-label"><b>Tipo de  Diagnostico</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control"  value="{{$diagnostico->tipo}}">
          </div>

          <div class="mb-3">
          <label for="lbl_descripcion" class="form-label"><b>Descricpción</b></label>
          <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"  value="{{$diagnostico->descripcion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_fecha" class="form-label"><b>Fecha</b></label>
          <input type="text" name="txt_fecha" id="txt_fecha" class="form-control"  value="{{$diagnostico->fecha_diagnostico}}">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/diagnosticos"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop