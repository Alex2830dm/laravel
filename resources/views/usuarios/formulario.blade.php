@extends('proyecto.app')
@section('title', 'Alex')
@section('content')
  <h1>Registro de Usuarios</h1><br>
  <form action="{{url('proyecto/usuarios/registro')}}" method="POST">
    @csrf
    <div class="row">
      <div class="col-4">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
      </div>
      <div class="col-4">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" class="form-control">
      </div>
    </div>
    <div class="row">
        <div class="col-4">
            <label for="correo">Correo:</label>
            <input type="text" name="correo" id="correo" class="form-control">
        </div>
        <div class="col-4">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password"class="form-control">
        </div>      
    </div>
    <div class="col-4">
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono"  id ="telefono" class="form-control">
    </div><br>
    <input type="submit" class="btn btn-outline-success" value="Agregar">    
  </form>
@endsection
