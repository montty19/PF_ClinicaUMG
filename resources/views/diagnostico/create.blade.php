@extends('adminlte::page')

@section('title', 'CLINICA UMG')

@section('content_header')
<h1>Crear Nuevo Diagnóstico</h1>
@stop

@section('content')
<form action="/diagnosticos" method="POST"> 
@csrf
<div class="mb-3">
          <label for="lbl_numdiagnostico" class="form-label"><b>Número de Diagnostico</b></label>
          <input type="text" name="txt_numero" id="txt_numero" class="form-control" tabindex="1">
          </div>

          <div class="mb-3">
          <label for="lbl_tipo" class="form-label"><b>Tipo de Dignóstico</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control" tabindex="2">
          </div>

          <div class="mb-3">
          <label for="lbl_descripcion" class="form-label"><b>Descripción Diagnostico</b></label>
          <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" tabindex="3">
          </div>

          <div class="mb-3">
          <label for="lbl_fecha" class="form-label"><b>Fecha Diagnóstico</b></label>
          <input type="text" name="txt_fecha" id="txt_fecha" class="form-control" tabindex="4">
          </div>
          
          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/diagnosticos"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop