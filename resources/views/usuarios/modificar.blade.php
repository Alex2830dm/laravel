@extends('layouts.app')
@section('content')
    <div class="container">
      <form action="{{url('usuario/usuarioupd', $edit->id_usuario)}}" method="post">
        @method('PATCH')        
        <div class="row justify-content-center">        
          <div class="col-4">
              <label class="text-center">Foto de Pefil:</label><br>
              <img src="https://static.vecteezy.com/system/resources/previews/000/574/512/non_2x/vector-sign-of-user-icon.jpg" width="220" heigh="auto">
          </div>
          <div class="col-4">
              <label class="text-center">Nombre:</label>
              <input class="form-control" type="text" name="name" value="{{ $edit->nombre }}">
              <label class="text-center">Apellido Paterno:</label>
              <input class="form-control" type="text" name="app" value="{{ $edit->apellido_paterno }}">
              <label class="text-center">Apellido Materno:</label>
              <input class="form-control" type="text" name="apm" value="{{ $edit->apellido_materno }}">
              <label class="text-center">Telefono:</label>
              <input class="form-control" type="text" name="telefono" value="{{ $edit->telefono }}">
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