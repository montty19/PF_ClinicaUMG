@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Lotes de Medicinas</h1>
@stop

@section('content')
<form action="/lotemedicinas/{{$lotemedicina->id}}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
<label for="lbl_numero" class="form-label"><b>Número de lote</b></label>
          <input type="text" name="txt_lote" id="txt_lote" class="form-control"  value="{{$lotemedicina->num_lote}}">
          </div>

<div class="mb-3">
<label for="lbl_tipo" class="form-label"><b>Tipo</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control"  value="{{$lotemedicina->tipo}}">
          </div>

<div class="mb-3">
<label for="lbl_vence" class="form-label"><b>Fecha de Vencimiento</b></label>
          <input type="text" name="txt_vence" id="txt_vence" class="form-control"  value="{{$lotemedicina->fecha_vencimiento}}">
          </div>

<div class="mb-3">
<label for="lbl_existencia" class="form-label"><b>Fecha de ingreso</b></label>
          <input type="text" name="txt_entrada" id="txt_entrada" class="form-control"  value="{{$lotemedicina->fecha_entrada}}">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/lotemedicinas"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop