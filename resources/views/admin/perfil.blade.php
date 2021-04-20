@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
        <h2>Perfil: {{$usu1->nombre}} {{$usu1->app}} {{$usu1->apm}}</h2>
    </center>
</div>     
    <div class="container-sm">   
        <div class="row justify-content-center">        
            <div class="col-4">
                <label class="text-center">Foto de Pefil:</label><br>
                <img src="{{asset('img/'. $usu1->foto)}}" width="250" heigh="auto">
            </div>
            <div class="col-4">
                <label class="text-center">Nombre:</label>
                <input class="form-control" type="text" name="name" value="{{ $usu1->nombre }}" readonly>
                <label class="text-center">Apellido Paterno:</label>
                <input class="form-control" type="text" name="app" value="{{ $usu1->app }}" readonly>
                <label class="text-center">Apellido Materno:</label>
                <input class="form-control" type="text" name="apm" value="{{ $usu1->apm }}" readonly>
                <label class="text-center">Telefono:</label>
                <input class="form-control" type="text" name="telefono" value="{{ $usu1->telefono }}" readonly>
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="text-center">Correo:</label>
                <input class="form-control" type="text" name="email" value="{{ $usu1->email }}" readonly>            
            </div>
            <div class="col-4">
                <label class="text-center">Municipio:</label>
                <input class="form-control" type="text" name="zona" value="{{$usu1->municipio}}" readonly>            
            </div>
        </div><br>
        <div class="row justify-content-center">
            <div class="col-4">
                <a href="{{url('admin/modificar/'.$usu1->id_usuario ) }}">                
                    <button type="button" class="btn btn-outline-secondary">
                        Modificar Datos                                
                    </button>
                </a>
            </div>        
        </div>
    </div>  
@endsection