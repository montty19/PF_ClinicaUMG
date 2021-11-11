@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Pacientes</h1>
@stop

@section('content')
<table id="pacientes" class="table table-dark table-striped table-bordered shadow-lg mt-4">
          <thead class="thead-inverse">
            <tr>
              
              <th scope="col">DPI</th>
              <th scope="col">Nombre</th>
              <th scope="col">Telefono</th>
              <th scope="col">Dirección</th>
              <th scope="col">Correo Electronico</th>
              <th scope="col">Acciones</th>
            </tr>
            </thead>
           
<tbody>
    @foreach($pacientes as $paciente)
    <tr>
        
        <td>{{$paciente->DPI}}</td>
        <td>{{$paciente->nombre}}</td>
        <td>{{$paciente->telefono}}</td>
        <td>{{$paciente->direccion}}</td>
        <td>{{$paciente->correo_electronico}}</td>
        <td>
        <form action ="{{ route ('pacientes.destroy',$paciente->id)}}" method="POST">
        @can('crear-rol')    
        <a href="/pacientes/{{$paciente->id}}/edit" class="btn btn-info">Editar</a>
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
<a href="pacientes/create" class="btn btn-warning" >Agregar</a>
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