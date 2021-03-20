@extends('layouts.app3')
@section('content')
<div class="container-sm">   
    <div class="row justify-content-center">        
        <div class="col-4">
            <label class="text-center">Foto de Pefil:</label><br>
            <img src="{{asset('img/'.$perfil->foto)}}" width="250" heigh="auto">
        </div>
        <div class="col-4">
            <label class="text-center">Nombre:</label>
            <input class="form-control" type="text" name="name" value="{{ $perfil->nombre }}" readonly>
            <label class="text-center">Apellido Paterno:</label>
            <input class="form-control" type="text" name="app" value="{{ $perfil->apellido_paterno }}" readonly>
            <label class="text-center">Apellido Materno:</label>
            <input class="form-control" type="text" name="apm" value="{{ $perfil->apellido_materno }}" readonly>
            <label class="text-center">Telefono:</label>
            <input class="form-control" type="text" name="telefono" value="{{ $perfil->telefono }}" readonly>
        </div>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-4">
            <label class="text-center">Correo:</label>
            <input class="form-control" type="text" name="email" value="{{ $perfil->email }}" readonly>            
        </div>
        <div class="col-4">
            <label class="text-center">Zona:</label>
            <input class="form-control" type="text" name="zona" value="Lerma" readonly>            
        </div>
    </div><br>    
    <div class="row justify-content-center">
        <div class="col-4">
            <a href="{{url('medico/modificar/'.$perfil->id_usuario ) }}">                
                <button type="button" class="btn btn-outline-secondary">
                    Modificar Datos                                
                </button>
            </a>
        </div>        
    </div>
</div>
@endsection