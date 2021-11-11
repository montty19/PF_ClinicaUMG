@extends('adminlte::page')

@section('title', 'Editar Datos de Puestos')

@section('content_header')
    <h1>Editar Datos de Puestos</h1>
@stop

@section('content')
<form action="/puestos/{{$puesto->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
          <label for="lbl_idp" class="form-label"><b>ID puesto</b></label>
          <input type="text" name="txt_idp" id="txt_idp" class="form-control" value="{{$puesto->id_puesto}}">
          </div>

          <div class="mb-3">
          <label for="lbl_tipo" class="form-label"><b>tipo</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control" value="{{$puesto->tipo}}">
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