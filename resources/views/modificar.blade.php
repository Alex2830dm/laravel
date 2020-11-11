@extends('layaout.app')
@section('title', 'Alex')
@section('content')
  <h1>Modificar datos: {{$usuario->nombre}}</h1><br>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{url('practica/actualizar', $usuario->id)}}" method="POST">  
    @csrf
    {{method_field('PATCH')}}
    <div class="row">
      <div class="col-4">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$usuario->nombre}}">
      </div>
      <div class="col-4">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" class="form-control" value="{{$usuario->apellido}}">
      </div>
    </div>
    <div class="row">
        <div class="col-4">
            <label for="correo">Correo:</label>
            <input type="text" name="correo" id="correo" class="form-control" value="{{$usuario->correo}}">
        </div>
        <div class="col-4">
            <label for="edad">Edad:</label>
            <input type="text" name="edad" id="edad"class="form-control" value="{{$usuario->edad}}">
        </div>      
    </div>
    <br><input type="submit" class="btn btn-outline-success" value="Actualizar">
  </form>
@endsection
