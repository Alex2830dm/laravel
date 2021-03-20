@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
        <h2>Cita Del Día: {{$datos->fecha_cita}}</h2>
    </center>
</div>
<div class="container">
    <form action="{{url('admin/updatec', $datos->id_cita)}}" method="post">
        @method('PATCH') 
        <div class="row">
            <div class="col-4">
                <input type="text" name="id_usuario" value="{{session('session_id')}}" hidden>
            </div>
            <div class="col-4">
                <input type="text" name="id_medico" value="{{$datos->id_usuario}}" hidden>
            </div>
        </div>        
        <div class="row">
            <div class="col-4">
                Nombre del paciente: <input type="text" name="nombre_paciente" value="{{$datos->nombre_paciente}}" class="form-control">
            </div>
            <div class="col-4">
                Apellidos del paciente: <input type="text" name="apellidos_paciente" value="{{$datos->apellido_paciente}}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Selecciona el tipo de cita
                <select name="tipo_cita" id="tipo_cita" class="form-control">
                    <option value=0> Selecciona un tipo de cita</option>
                    <option value=1> Consultorio </option>
                    <option value=2> Domicilio </option>
                </select>
            </div>
            <div class="col-4">
                Costo cita <input type="text" name="costo_cita" id="costo_cita" class="form-control" value="{{$datos->costo_cita}}">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                Fecha consulta <input type="date" name="fecha" value="{{$datos->fecha_cita}}" class="form-control">
            </div>
            <div class="col-2">
                Hora consulta <input type="text" name="hora" class="form-control" value="{{$datos->hora_cita}}">
            </div>
            <div class="col-4">
                Telefono de contacto del paciente: <input type="text" value="{{$datos->telefono_contacto}}" class="form-control" name="telefono_contacto">
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                Calle: <input type="text" name="direccion_calle" value="{{$datos->direccion_calle}}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Colinia: <input type="text" name="direccion_colonia" class="form-control" value="{{$datos->direccion_colonia}}">
            </div>
            <div class="col-4">
                Localidad: <input type="text" name="direccion_localidad" class="form-control" value="{{$datos->direccion_localidad}}">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Municipio: <input type="text" name="direccion_municipio" class="form-control" value="{{$datos->direccion_municipio}}">
            </div>
            <div class="col-4">
                Estado: <input type="text" name="direccion_estado" class="form-control">
            </div>        
        </div><br><hr> 
        </div><br><hr>
        <div class="row">
            <div class="col-4">
                <input type="submit" value="Actualizar Cita" class="btn btn-success">
            </div>
            <div class="col-4">
                <input type="reset" value="Cancelar" class="btn btn-danger">
            </div>
        </div>
    </form>
</div>
@endsection