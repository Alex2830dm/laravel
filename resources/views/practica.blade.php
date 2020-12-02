@extends('layaout.app')
@section('title', 'Alex')
@section('content')
  <h1>Registro de Usuarios</h1><br>
  <div class="container">
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{url('practica/registro')}}" method="POST">
      @csrf
      <div class="row"> <!-- inicio de fila-->
        <div class="col-4"><!--columna de 4 espacios-->
          <label for="nombre">Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="form-control">
        </div><!--se cierra columna-->
        <div class="col-4"><!--otra columna de 4 espacios-->
          <label for="apellido">Apellido:</label>
          <input type="text" name="apellido" id="apellido" class="form-control">
        </div><!--se cierra columna-->
      </div><!--se cierra fila-->
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
      <div class="row">
        <div class="col-4">
          <label for="edad">Id Materia:</label>
          <select aria-label="criterio" name="id_materia" id="id_materia"  class=" form-control">
            <option value="1">Programacion Orientada a Objetos</option>
            <option value="2">Aplicaciones Web Orientada a Servidores</option>
            <option value="5">Diseño de Aplicaciones</option>
          </select>
        </div>
        <div class="col-4">
          <label for="nombremateria">Confirma el nombre de la materia</label>
          <input type="text" name="nombre_materia" id="nombre_materia" class="form-control">
        </div>
      </div>
      <input type="submit" class="btn btn-outline-success" value="Agregar">
    </form>
  </div>
  
@endsection
