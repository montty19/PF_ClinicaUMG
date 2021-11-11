@extends('adminlte::page')

@section('title', 'Nuevo Usuario')

@section('content_header')
    <h1>Nuevo Rol</h1>
    @if ($errors->any())
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <strong>¡Valide lo campos!</strong>
        @foreach($errors->all() as $error)
            <span class="badge badge-danger">{{$error}}</span>
        @endforeach
    </div>   
    @endif

{!! Form::open(array('route'=>'usuarios.store', 'method'=>'POST')) !!}    
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for ="name">Nombre del Usuario </label>
            {!! Form::text('name', null, array('class'=>'form-control')) !!}
        </div>        
    </div>    

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for ="email">Correo Electrónico</label>
            {!! Form::text('email', null, array('class'=>'form-control')) !!}
        </div>        
    </div>  

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for ="password">Password</label>
            {!! Form::password('password', array('class'=>'form-control')) !!}
        </div>        
    </div>      

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for ="confirm-password">Confirmar Password</label>
            {!! Form::password('confirm-password', array('class'=>'form-control')) !!}
        </div>        
    </div>      
 
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <label for="">Roles</label>
        {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
    </div> 
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
{!! Form::close() !!}    
    
@endsection

