@extends('adminlte::page')

@section('title', 'CLINICA UMG')

@section('content_header')
    <h1>Crear Exámen</h1>
@stop

@section('content')
<form action="/examenes" method="POST"> 
@csrf
          <div class="mb-3">
          <label for="lbl_numexamen" class="form-label"><b>NUMERO DE EXAMEN</b></label>
          <input type="text" name="txt_numexamen" id="txt_numexamen" class="form-control" tabindex="1">
          </div>

          <div class="mb-3">
          <label for="lbl_tipo" class="form-label"><b>TIPO DE EXÁMEN</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control" tabindex="2">
          </div>

          <div class="mb-3">
          <label for="lbl_descripcion" class="form-label"><b>DESCRIPCIÓN</b></label>
          <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control" tabindex="3">
          </div>

          <div class="mb-3">
          <label for="lbl_fecha" class="form-label"><b>FECHA DE EXÁMEN</b></label>
          <input type="text" name="txt_fecha" id="txt_fecha" class="form-control" tabindex="4">
          </div>
          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/examenes"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop