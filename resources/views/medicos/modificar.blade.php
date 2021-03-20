@extends('layouts.app3')
@section('content')
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
              <input class="form-control" type="text" name="app" value="{{ $datos->apellido_paterno }}">
              <label class="text-center">Apellido Materno:</label>
              <input class="form-control" type="text" name="apm" value="{{ $datos->apellido_materno }}">
              <label class="text-center">Telefono:</label>
              <input class="form-control" type="text" name="telefono" value="{{ $datos->telefono }}">
          </div>
      </div><br>      
      <div class="row justify-content-center">
          <div class="col-4">                          
                  <input type="submit" value="Actualizar" class="btn btn-success">                      
              </a>
          </div>        
      </div>
      </form>
    </div>
@endsection