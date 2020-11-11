@extends('layaout.app')
@section('title', 'Alex')
@section('content')
  <h1>Registro de Materias</h1><br>
  <div class="container"> 
    <form action="{{url('practica/registromat')}}" method="POST">
      @csrf
        <div class="row"> <!-- inicio de fila-->
            <div class="col-4"><!--columna de 4 espacios-->
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
        </div><br>
        <input type="submit" class="btn btn-outline-success" value="Agregar">
    </form>
@endsection    