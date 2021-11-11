@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>
    
    @can('crear-rol')
<a class="btn btn-warning" href="{{ route('roles.create') }}">Nuevo</a>      
@endcan
                          
 
    <table class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-inverse">
        <tr>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($roles as $role)
        <tr>                           
            <td>{{ $role->name }}</td>
            <td>                                
                @can('editar-rol')
                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Editar</a>
                @endcan
                
                @can('borrar-rol')
                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan
            </td>
        </tr>
        @endforeach
  </tbody>
 </table>

@endsection

