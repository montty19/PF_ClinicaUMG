@extends('adminlte::page')

@section('title', 'Crear Nuevo Puesto')

@section('content_header')
    <h1>Crear Nuevo Puesto</h1>
@stop

@section('content')
<form action="/puestos" method="POST"> 
@csrf
<div class="mb-3">
          <label for="lbl_tipo" class="form-label"><b>ID Puesto</b></label>
          <input type="text" name="txt_idp" id="txt_idp" class="form-control" tabindex="1">
          </div>

          <div class="mb-3">
          <label for="lbl_tipo" class="form-label"><b>Tipo</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control" tabindex="2">
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/puestos"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop