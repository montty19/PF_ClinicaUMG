@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
    <a class ="btn btn-warning" href="{{route ('usuarios.create')}}">Nuevo</a>

    <table class="table table-dark table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="thead-inverse">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->name}}</td>
            <td>{{$usuario->email}}</td>
            <td>
                @if(!empty($usuario->getRoleNames()))
                    @foreach($usuario->getRoleNames() as $rolName)
                    <h5><span class = "badge badge-dark">{{$rolName}}</span></h5>
                    @endforeach
                @endif    
            </td>
           <td> 
                @can('editar-rol')
                <a class="btn btn-info" href="{{route ('usuarios.edit', $usuario->id)}}">Editar</a>
                
                {!! Form::open(['method'=>'DELETE', 'route'=>['usuarios.destroy', $usuario->id], 'style'=>'display:inline'])!!}
                    {!! Form::submit('Borrar', ['class'=> 'btn btn-danger'])!!}
                {!! Form::close()!!}
                @endcan
            </td>
        </tr>  
    @endforeach 
  </tbody>
 </table>
<div>
    {!! $usuarios->links()!!}
</div>
@endsection

