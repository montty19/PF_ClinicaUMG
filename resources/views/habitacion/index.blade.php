@extends('adminlte::page')

@section('title', 'Habitaciones')

@section('content_header')
    <h1>Habitaciones</h1>
@stop

@section('content')
<table id="habitaciones" class="table table-dark table-striped table-bordered shadow-lg mt-4">
          <thead class="thead-inverse">
            <tr>
              
              <th scope="col">Numero de Habitación</th>
              <th scope="col">Nivel Habitación</th>
              <th scope="col">Cantidad de Pacientes</th>
              <th scope="col">Acciones</th>
            </tr>
            </thead>
           
<tbody>
    @foreach($habitaciones as $habitacion)
    <tr>
        
        <td>{{$habitacion->num_habitacion}}</td>
        <td>{{$habitacion->nivel}}</td>
        <td>{{$habitacion->cant_pacientes}}</td>
        <td>
        <form action ="{{ route ('habitaciones.destroy',$habitacion->id)}}" method="POST">
        @can('crear-rol')
            <a href="/habitaciones/{{$habitacion->id}}/edit" class="btn btn-info">Editar</a>
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
<a href="habitaciones/create" class="btn btn-warning" >Agregar</a>
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
    $('#pacientes').DataTable({
        "lengthMenu":[[5,10,15,-1],[5,10,15,"All"]]
    });
} );
</script>
@stop