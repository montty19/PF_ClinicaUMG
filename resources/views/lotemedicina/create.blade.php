@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Lote de Medicinas</h1>
@stop

@section('content')
<form action="/lotemedicinas" method="POST">
@csrf

        <div class="mb-3">
          <label for="lbl_lote" class="form-label"><b>Número de lote</b></label>
         <input type="text" name="txt_lote" id="txt_lote" class="form-control"  >
          </div>

    <div class="mb-3">
    <label for="lbl_tipo" class="form-label"><b>Tipo</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control"  >
          </div>

        <div class="mb-3">
    <label for="lbl_vence" class="form-label"><b>Fecha de Vencimiento</b></label>
          <input type="text" name="txt_vence" id="txt_vence" class="form-control"  >
          </div>

<div class="mb-3">
<label for="lbl_entrada" class="form-label"><b>Fecha de Entrada</b></label>
          <input type="text" name="txt_entrada" id="txt_entrada" class="form-control"  >
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/lotemedicinas"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop