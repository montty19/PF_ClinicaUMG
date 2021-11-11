@extends('adminlte::page')

@section('title', 'CLINICA UMG')

@section('content_header')
    <h1>Listado de Exámenes</h1>
@stop

@section('content')
<table id="examenes" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-inverse">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Número de exámen</th>
            <th scope="col">Tipo de exámen</th>
            <th scope="col">Descripción</th>
            <th scope="col">fecha de expamen</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($examenes as $examen)
        <tr>
            <td>{{$examen->id}}</td>
            <td>{{$examen->num_examen}}</td>
            <td>{{$examen->tipo}}</td>
            <td>{{$examen->descripcion}}</td>
            <td>{{$examen->fecha_examen}}</td>
            <td>
                <form action="{{route('examenes.destroy', $examen->id)}}" method="POST"> 
                @can('crear-rol')     
                <a href="/examenes/{{$examen->id}}/edit" class="btn btn-info">Editar</a>
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
<a href="examenes/create" class="btn btn-warning" >Agregar</a>
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
    $('#examenes').DataTable({
        "lengthMenu":[[5,10,15,-1],[5,10,15,"All"]]
    });
} );
</script>
@stop