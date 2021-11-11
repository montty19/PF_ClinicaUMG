@extends('adminlte::page')

@section('title', 'Editar Datos de Sucursal')

@section('content_header')
    <h1>Editar Datos de Sucursal</h1>
@stop

@section('content')
<form action="/sucursales/{{$sucursal->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
          <label for="lbl_numero" class="form-label"><b>Número de Sucursal</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" value="{{$sucursal->num_sucursal}}">
          </div>

          <div class="mb-3">
          <label for="lbl_direccion" class="form-label"><b>Dirección</b></label>
          <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="{{$sucursal->direccion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_departamento" class="form-label"><b>Departamento</b></label>
          <input type="text" name="txt_departamento" id="txt_departamento" class="form-control" value="{{$sucursal->departamento}}">
          </div>


          <div class="mb-3">
          <label for="lbl_telefono" class="form-label"><b>Teléfono</b></label>
          <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" value="{{$sucursal->telefono}}">
          </div>          

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/sucursales"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop