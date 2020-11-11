@extends('proyecto.app')
@section('title', 'Registro de Usuarios')
@section('content')
  <h1>Registro de Usuarios</h1><br>
  <form action="{{url('proyecto/usuarios/registro')}}" method="POST">
    @csrf
    <div class="container">
    <div class="row">
          <div class="col-6">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="nombre">
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <label for="apellido">Apellido(s):</label>
            <input type="text" name="apellido" class="form-control" placeholder="Apellido(s)" id="apellido"/>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <label for="correo">Correo:</label>
            <input type="email" name="correo" class="form-control" placeholder="ejemplo@gmail.com" id="correo"/>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" class="form-control" id="contraseña">
          </div>
        </div>  
        
        <div class="row">
          <div class="col-6">
            <label for="fecha_nacimieno">Fecha De Nacimiento</label>
            <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" placeholder="dd-mm-aaaa">
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <label for="telefono">No. Telefonico</label>
            <input  type="text" name="telefono" class="form-control" placeholder="No. Telefonico" id="telefono">
          </div>
        </div><br>
        <div class="row"><div class="col-6 text-center">Datos De Domicilio</div></div>
        <div class="row">
          <div class="col-6">
            <label for="direccion">Domicilio:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Calle, Numero, Pueblo, Localidad, Municipio, Estado" >                
          </div>  
        </div>
        <div class="row">
          <div class="col-6">
            <label class="text-with" for="foto">Ingresa foto de Perfil</label>
            <input type="file" name="foto" id="foto" class="form-control">
          </div>
        </div> <br>
        <input type="submit" value="Enviar" class="btn btn-success" />
    </div>
  </form>
@endsection
