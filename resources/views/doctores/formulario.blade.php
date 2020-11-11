@extends('proyecto.app')
@section('title', 'Alex')
@section('content')
<h3>Healthcare System - Registro de Sector Salud</h3>
  <div class="container">
      <form action="{{url('proyecto/doctores/registro')}}" method="POST">
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
            <label for="apellidos">Apellido(s):</label>
            <input type="text" name="apellidos" class="form-control" placeholder="Apellido(s)" id="apellidos"/>
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
            <label for="telefono">No. Telefonico</label>
            <input  type="number" name="telefono" class="form-control" placeholder="No. Telefonico" id="telefono">
          </div>
        </div><br>        
        <div class="row"><div class="col-6 text-center">Datos De Consultorio</div></div>
        <div class="row">
            <div class="col-6">
                <label for="Cedula">Cedula:</label>
                <input type="text" name="Cedula" id="Cedula" class="form-control" placeholder="Cedula">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="lic">Licenciatura:</label>
                <input type="text" name="lic" id="lic" class="form-control" placeholder="Licenciatura">
            </div>
            <div class="col-3">
                <label for="especialidad">Especialidad:</label>
                <input type="text" name="especialidad" id="especialidad" class="form-control" placeholder="Especialidad">
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="direccion">Direccion de Consultorio</label>
                <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion">                
            </div>            
        </div>        
        <div class="row">
            <div class="col-6">
                <label for="Dias_aten">Día(s) de Atencion</label><br>
                <input type="text" name="Dias_aten" id="Dias_aten" class="form-control" placeholder="Lunes, Martes, Miercoles...">               
            </div>            
        </div><br>
        <div class="row">
            <div class="col-4">
                <label for="horas">Hora de Atencion</label>
                <input type="text" name="horas" id="horas" class="form-control" placeholder="HH:MM - HH:MM">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label for="consul_gen">Consulta General en Consultorio</label>
                <input type="money" name="Consultag" id="consul_gen" class="form-control" placeholder="$00.00 MXM">
            </div>
            <div class="col-3">
                <label for="consul_dom">Consulta General a Domicilio</label>
                <input type="money" name="Consultad" id="consul_dom" class="form-control" placeholder="$00.00 MXM">
            </div>
        </div>
        <input type="submit" value="Enviar" class="btn btn-success" />
        </div>
      </form>
  </div>
@endsection
