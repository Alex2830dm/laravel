@extends('layouts.app3')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
        <h2>Modifiar Datos: {{$datos->nombre}} {{$datos->app}} {{$datos->apm}}</h2>
    </center>
</div>
    <div class="container">
      <form action="{{url('medico/update', $datos->id_usuario)}}" method="post">
        @method('PATCH')        
        <div class="row justify-content-center">        
          <div class="col-4">
              <label class="text-center">Foto de Pefil:</label><br>
              <img src="{{asset('img/'.$datos->foto)}}" width="220" heigh="auto">
          </div>
          <div class="col-4">
              <label class="text-center">Nombre:</label>
              <input class="form-control" type="text" name="name" value="{{ $datos->nombre }}">
              <label class="text-center">Apellido Paterno:</label>
              <input class="form-control" type="text" name="app" value="{{ $datos->app }}">
              <label class="text-center">Apellido Materno:</label>
              <input class="form-control" type="text" name="apm" value="{{ $datos->apm }}">
              <label class="text-center">Telefono:</label>
              <input class="form-control" type="text" name="telefono" value="{{ $datos->telefono }}">
          </div>
      </div><br>
      <div class="row justify-content-center">
        <div class="col-4">
            <label class="text-center">Correo:</label>
            <input class="form-control" type="text" name="email" value="{{ $datos->email }}" readonly>            
        </div>
        <div class="col-4">
            <label class="text-center">Municipio:</label>
            <input class="form-control" type="text" name="zona" value="{{$datos->municipio}}" >            
        </div>
    </div>
      <div class="row justify-content-center">
          <div class="col-4">                          
                  <input type="submit" value="Actualizar" class="btn btn-success">                      
              </a>
          </div>        
      </div>
      </form>
    </div>
@endsection