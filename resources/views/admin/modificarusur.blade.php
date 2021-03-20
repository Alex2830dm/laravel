@extends('layouts.app2')
@section('content')
    <div class="container">
      <form action="{{url('emergenciass/usuariosupdate', $edit->id_usuario)}}" method="post">
        @method('PATCH')        
        <div class="row">
          <div class="col-3">
              Nombre: <input type="text" name="nombre" id="nombre" class="form-control" value="{{$edit->nombre}}">
          </div>
          <div class="col-3">
            Apellido Paterno: <input type="text" name="app" id="app" class="form-control" value="{{$edit->apellido_paterno}}">
          </div>
          <div class="col-3">
            Apellido Materno: <input type="text" name="apm" id="apm" class="form-control" value="{{$edit->apellido_materno}}">
          </div>
        </div>
        <div class="row">
          <div class="col-3">
            Telefono: <input type="text" name="telefono" id="nombre" class="form-control" value="{{$edit->telefono}}">
          </div>          
          <div class="col-3">
            Perfil: 
            <select name="perfil" id="perfil" class="form-control">
              <option value="0">Selecciona un Perfil</option>
              <option value="administrador">Administrador</option>
              <option value="usuario">Usuario</option>
              <option value="medico">Medico</option>
            </select>
          </div>          
        </div><br>
        <div class="row">
          <div class="col-4">
            <input type="submit" value="Registrar" class="btn btn-success">
          </div>
          <div class="col-4">
            <input type="reset" value="Cancelar" class="btn btn-danger">
          </div>
        </div>
      </form>
    </div>
@endsection