@extends('proyecto.app')
@section('title', 'Alex')
@section('content')
<br><br><br>
  <div class="container">
    <h3>Healthcare System - Registro de Sitios de Emergencias</h3>
    <form action="#" method="POST">      
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
      </div><BR>
      <input type="submit" value="Enviar" class="btn btn-success" />
    </form>
   </div> 