@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Lote de Medicinas</h1>
@stop

@section('content')
<table id="lotemedicinas" class="table table-dark table-striped table-bordered shadow-lg mt-4">
          <thead class="thead-inverse">
            <tr>
              <th scope="col">Número de lote</th>
              <th scope="col">Tipo</th>
              <th scope="col">Fecha de Vencimiento</th>
              <th scope="col">Fecha de Entrada</th>
            </tr>
            </thead>
           
<tbody>
@foreach($lotemedicinas as $lotemedicina)
    <tr>
        
        <td>{{$lotemedicina->num_lote}}</td>
        <td>{{$lotemedicina->tipo}}</td>
        <td>{{$lotemedicina->fecha_vencimiento}}</td>
        <td>{{$lotemedicina->fecha_entrada}}</td>
        <td>
        <form action ="{{ route ('lotemedicinas.destroy',$lotemedicina->id)}}" method="POST">
        @can('crear-rol') 
            <a href="/lotemedicinas/{{$lotemedicina->id}}/edit" class="btn btn-info">Editar</a>
        @endcan
            @csrf
            @method('DELETE')
        @can('crear-rol') 
            <button type="submit" class="btn btn-danger">Eliminar</button>
        @endcan 
            </form>
        </td>
        </tr>
@endforeach
</tbody>
</table>

<div align="center">
@can('crear-rol') 
<a href="lotemedicinas/create" class="btn btn-warning" >Agregar</a>
@endcan
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#lotemedicinas').DataTable({
        "lengthMenu":[[5,10,15,-1],[5,10,15,"All"]]
    });
} );
</script>
@stop