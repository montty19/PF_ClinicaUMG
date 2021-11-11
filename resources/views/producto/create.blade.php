@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Ingresar Nuevo Producto</h1>
@stop

@section('content')
<form action="/productos" method="POST">
@csrf

        <div class="mb-3">
          <label for="lbl_codigo_producto" class="form-label"><b>CODIGO PRODUCTO</b></label>
         <input type="text" name="txt_codigo_producto" id="txt_codigo_producto" class="form-control"  >
          </div>

    <div class="mb-3">
    <label for="lbl_Descripcion" class="form-label"><b>DESCRIPCION</b></label>
          <input type="text" name="txt_Descripcion" id="txt_Descripcion" class="form-control"  >
          </div>

        <div class="mb-3">
    <label for="lbl_num_lote" class="form-label"><b>NUMERO DE LOTE</b></label>
          <input type="text" name="txt_num_lote" id="txt_num_lote" class="form-control"  >
          </div>

<div class="mb-3">
<label for="lbl_existencia" class="form-label"><b>EXISTENCIA</b></label>
          <input type="text" name="txt_existencia" id="txt_existencia" class="form-control"  >
          </div>

          <div class="mb-3">
          <input type="submit" name="btn_agregar" id="btn_agregar" class="btn btn-primary" value="Agregar">
          <a href="/productos"  class="btn btn-danger" tabindex="1">Cancelar</a>
          </div>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop