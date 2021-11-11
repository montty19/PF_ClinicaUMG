@extends('adminlte::page')

@section('title', 'Puestos')

@section('content_header')
    <h1>Listado de Sucursales</h1>
@stop

@section('content')
<table id="sucursales" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-inverse">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Numero de Sucursal</th>
            <th scope="col">Direccion</th>
            <th scope="col">Departamento</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>                  
        </tr>
    </thead>
    <tbody>
        @foreach ($sucursales as $sucursal)
        <tr>
            <td>{{$sucursal->id}}</td>
            <td>{{$sucursal->num_sucursal}}</td>
            <td>{{$sucursal-> direccion}}</td>
            <td>{{$sucursal-> departamento}}</td>
            <td>{{$sucursal-> telefono}}</td>
            <td>
                <form action="{{route('sucursales.destroy', $sucursal->id)}}" method="POST"> 
                @can('crear-rol') 
                <a href="/sucursales/{{$sucursal->id}}/edit" class="btn btn-info">Editar</a>
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
<a href="/sucursales/create" class="btn btn-warning" >Agregar</a>
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
    $('#sucursales').DataTable({
        "lengthMenu":[[5,10,15,-1],[5,10,15,"All"]]
    });
} );
</script>
@stop