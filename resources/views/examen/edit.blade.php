@extends('adminlte::page')

@section('title', 'Editar Exámenes')

@section('content_header')
    <h1>Editar Datos de Exámen</h1>
@stop

@section('content')
<form action="/examenes/{{$examen->id}}" method="POST">
@csrf
@method('PUT')
          <div class="mb-3">
          <label for="lbl_numero" class="form-label"><b>NÚMERO DE EXÁMEN</b></label>
          <input type="text" name="txt_numexamen" id="txt_numexamen" class="form-control" value="{{$examen->num_examen}}">
          </div>

          <div class="mb-3">
          <label for="lbl_tipo" class="form-label"><b>TIPO DE EXÁMEN</b></label>
          <input type="text" name="txt_tipo" id="txt_tipo" class="form-control"  value="{{$examen->tipo}}">
          </div>

          <div class="mb-3">
          <label for="lbl_descripcion" class="form-label"><b>DESCRIPCIÓN</b></label>
          <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"  value="{{$examen->descripcion}}">
          </div>

          <div class="mb-3">
          <label for="lbl_fecha" class="form-label"><b>FECHA</b></label>
          <input type="text" name="txt_fecha" id="txt_fecha" class="form-control"  value="{{$examen->fecha_examen}}">
          </div>

          <div class="mb-3">
          <button type="submit"  class="btn btn-primary" >Guardar</button>
          <a href="/examenes"  class="btn btn-danger">Cancelar</a>
          </div>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop