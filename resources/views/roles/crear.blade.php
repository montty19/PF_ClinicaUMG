@extends('adminlte::page')

@section('title', 'Nuevo Rol')

@section('content_header')
    <h1>Crear Rol</h1>
    @if ($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>¡Valide lo campos!</strong>
        @foreach($errors->all() as $error)
            <span class="badge badge-danger">{{$error}}</span>
        @endforeach
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">$times;</span>
    </button>
    </div>   
    @endif

{!! Form::open(array('route'=>'roles.store', 'method'=>'POST')) !!}    
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
     <div class="form-group">
            <label for ="">Nombre del Rol</label>
            {!! Form::text('name', null, array('class'=>'form-control')) !!}
    </div>        
</div>        

<div class="col-xs-12 col-sm-12 col-md-12">
     <div class="form-group">
        <label for ="">Permiso para este Rol</label>
</br>
@foreach($permission as $value)
    <label> {{Form::checkbox('permission[]',$value->id, false, array('class'=>'name')) }}
    {{$value->name}}</label>
</br>          
@endforeach
    </div>  
</div>   
    <button type="submit" class="btn btn-primary">Guardar</button>
</br>
    {!! Form::close() !!}    
    </div> 
</div>

@endsection


</div>  
</div>        
