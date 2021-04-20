@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
        <h2>Editar Datos: {{$edit->nombre}} {{$edit->app}} {{$edit->apm}}</h2>
    </center>
</div>
    <div class="container">
      <form action="{{url('admin/update', $edit->id_usuario)}}" method="post">
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
              <input class="form-control" type="text" name="app" value="{{ $edit->app }}">
              <label class="text-center">Apellido Materno:</label>
              <input class="form-control" type="text" name="apm" value="{{ $edit->apm }}">
              <label class="text-center">Telefono:</label>
              <input class="form-control" type="text" name="telefono" value="{{ $edit->telefono }}">
          </div>
      </div><br>
        <div class="row justify-content-center">
            <div class="col-4">
                <label class="text-center">Correo:</label>
                <input class="form-control" type="text" name="email" value="{{ $edit->email }}" readonly>            
            </div>
            <div class="col-4">
                <label class="text-center">Municipio:</label>
                <input class="form-control" type="text" name="zona" value="{{$edit->municipio}}" >            
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