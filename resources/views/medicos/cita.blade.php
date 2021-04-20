@extends('layouts.app3')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
        <h2>Cita Del Día: {{$datos->fecha_cita}}</h2>
    </center>
</div>
<div class="container">
    <form action="{{url('medico/atendida', $datos->id_cita)}}" method="post">
        @method('PATCH')               
        <div class="row">
            <div class="col-4">
                Nombre del paciente: <input type="text" name="nombre_paciente" value="{{$datos->nombre_paciente}}" class="form-control" readonly>
            </div>
            <div class="col-4">
                Apellidos del paciente: <input type="text" name="apellidos_paciente" value="{{$datos->apellido_paciente}}" class="form-control" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Selecciona el tipo de cita
                <input type="text" name="tipo_cita" id="tipo_cita" value="{{$datos->tipo_cita}}" class="form-control" readonly>
            </div>
            <div class="col-4">
                Costo cita <input type="text" name="costo_cita" id="costo_cita" class="form-control" value="{{$datos->costo_cita}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                Fecha consulta <input type="date" name="fecha" value="{{$datos->fecha_cita}}" class="form-control" readonly> 
            </div>
            <div class="col-2">
                Hora consulta <input type="text" name="hora" class="form-control" value="{{$datos->hora_cita}}" readonly>
            </div>
            <div class="col-4">
                Telefono de contacto del paciente: <input type="text" value="{{$datos->telefono_contacto}}" class="form-control" name="telefono_contacto" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                Calle: <input type="text" name="direccion_calle" value="{{$datos->dcalle}}" class="form-control" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Colinia: <input type="text" name="direccion_colonia" class="form-control" value="{{$datos->dcolonia}}" readonly>
            </div>
            <div class="col-4">
                Localidad: <input type="text" name="direccion_localidad" class="form-control" value="{{$datos->dlocalidad}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Municipio: <input type="text" name="direccion_municipio" class="form-control" value="{{$datos->dmunicipio}}" readonly>
            </div>            
        </div><br><hr>
        <div class="row">
            <div class="col-4">
                Observaciones: <input type="text" name="observaciones" class="form-control">
            </div>
            <div class="col-4">
                Medicamentos: <input type="text" name="medicamentos" class="form-control">
            </div>
        </div> 
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