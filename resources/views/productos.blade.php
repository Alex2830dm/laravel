@extends('layaout.default')
@section('content')
<form action="{{url('practica/registro')}}" method="POST">
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
            <label for="edad">Edad:</label>
            <input type="text" name="edad" id="edad"class="form-control">
        </div>      
    </div>
    <input type="submit" class="btn btn-outline-success" value="Agregar">    
  </form>
@stop
