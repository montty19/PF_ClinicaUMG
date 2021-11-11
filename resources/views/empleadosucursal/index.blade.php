@extends('adminlte::page')

@section('title', 'Clínica UMG')

@section('content_header')
    <h1>Empleado por Sucursal</h1>
@stop

@section('content')
<table id="empleadosucursales" class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-inverse">
            <tr>
              <th scope="col">Número de Sucursal</th>
              <th scope="col">Número de Empleado</th>
              <th scope="col">ID de puesto</th>
            </tr>
     </thead>       
<tbody>
    @foreach($empleadosucursales as $empleadosucursal)
    <tr>
        <td>{{$empleadosucursal->num_sucursal}}</td>
        <td>{{$empleadosucursal->num_empleado}}</td>
        <td>{{$empleadosucursal->id_puesto}}</td>
        <td>
        <form action ="{{ route ('empleadosucursales.destroy',$empleadosucursal->id)}}" method="POST">
            <a href="/empleadosucursales/{{$empleadosucursal->id}}/edit" class="btn btn-info">Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
<div align="center">
<a href="empleadosucursales/create" class="btn btn-warning" >Agregar</a>
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
    $('#empleadosucursales').DataTable({
        "lengthMenu":[[5,10,15,-1],[5,10,15,"All"]]
    });
} );
</script>
@stop