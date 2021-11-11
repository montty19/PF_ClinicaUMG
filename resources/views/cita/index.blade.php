@extends('adminlte::page')

@section('title', 'CLINICA UMG')

@section('content_header')
    <h1>Listado de Citas</h1>
@stop

@section('content')
<table id="citas" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-inverse">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Número de Cita</th>
            <th scope="col">DPI</th>
            <th scope="col">Fecha de Cita</th>
            <th scope="col">Hora  de Cita</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($citas as $cita)
        <tr>
            <td>{{$cita->id}}</td>
            <td>{{$cita->num_cita}}</td>
            <td>{{$cita->DPI}}</td>
            <td>{{$cita->fecha}}</td>
            <td>{{$cita->hora}}</td>
            <td>
                <form action="{{route('citas.destroy', $cita->id)}}" method="POST"> 
                @can('crear-rol')    
                <a href="/citas/{{$cita->id}}/edit" class="btn btn-info">Editar</a>
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
<a href="citas/create" class="btn btn-warning" >Agregar</a>
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
    $('#citas').DataTable({
        "lengthMenu":[[5,10,15,-1],[5,10,15,"All"]]
    });
} );
</script>
@stop