@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Editar Productos</h1>
@stop

@section('content')
<form action="/productos/{{$producto->id}}" method="POST">
@csrf
@method('PUT')

<div class="mb-3">
<label for="lbl_codigo_producto" class="form-label"><b>CODIGO PRODUCTO</b></label>
          <input type="text" name="txt_codigo_producto" id="txt_codigo_producto" class="form-control"  value="{{$producto->codigo_producto}}">
          </div>

<div class="mb-3">
<label for="lbl_Descripcion" class="form-label"><b>DESCRIPCION</b></label>
          <input type="text" name="txt_Descripcion" id="txt_Descripcion" class="form-control"  value="{{$producto->Descripcion}}">
          </div>

<div class="mb-3">
<label for="lbl_num_lote" class="form-label"><b>NUMERO DE LOTE</b></label>
          <input type="text" name="txt_num_lote" id="txt_num_lote" class="form-control"  value="{{$producto->num_lote}}">
          </div>

<div class="mb-3">
<label for="lbl_existencia" class="form-label"><b>EXISTENCIA</b></label>
          <input type="text" name="txt_existencia" id="txt_existencia" class="form-control"  value="{{$producto->existencia}}">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_modificar" id="btn_modificar" class="btn btn-primary" value="Modificar">
          <a href="/productos"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop