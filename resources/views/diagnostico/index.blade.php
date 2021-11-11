@extends('adminlte::page')

@section('title', 'CLINICA UMG')

@section('content_header')
    <h1>Listado de Diagnósticos</h1>
@stop

@section('content')

<table id="diagnosticos" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-inverse">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Número de diagnóstico</th>
            <th scope="col">Tipo de diagnostico</th>
            <th scope="col">Descripción</th>
            <th scope="col">fecha de diagnostico</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($diagnosticos as $diagnostico)
        <tr>
            <td>{{$diagnostico->id}}</td>
            <td>{{$diagnostico->num_diagnostico}}</td>
            <td>{{$diagnostico-> tipo}}</td>
            <td>{{$diagnostico->descripcion}}</td>
            <td>{{$diagnostico->fecha_diagnostico}}</td>
            <td>
                <form action="{{route('diagnosticos.destroy', $diagnostico->id)}}" method="POST"> 
                @can('crear-rol') 
                <a href="/diagnosticos/{{$diagnostico->id}}/edit" class="btn btn-info">Editar</a>
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
<a href="diagnosticos/create" class="btn btn-warning" >Agregar</a>
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
    $('#diagnosticos').DataTable({
        "lengthMenu":[[5,10,15,-1],[5,10,15,"All"]]
    });
} );
</script>
@stop