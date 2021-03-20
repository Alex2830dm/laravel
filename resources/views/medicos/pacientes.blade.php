@extends('layouts.app3')
@section('content')
@foreach ($datos as $datos)
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
        <h2>Cita Del Paciente: {{$datos->nombre_paciente}}</h2>
    </center>
</div>
<div class="container">
    <form action="{{url('medico/updatec', $datos->id_cita)}}" method="post">
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
                Nombre del paciente: <input type="text" name="nombre_paciente" value="{{$datos->nombre_paciente}}" class="form-control" readonly>
            </div>
            <div class="col-4">
                Apellidos del paciente: <input type="text" name="apellidos_paciente" value="{{$datos->apellido_paciente}}" class="form-control" readonly>
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
            <div class="col-4">
                Tipo de Consulta <input type="text" name="tipo" id="tipo" value="{{$datos->tipo_cita}}" class="form-control" readonly>
            </div>
            <div class="col-4">
                Costo Consulta <input type="text" name="" id="" value="{{$datos->costo_cita}}" class="form-control" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Calle: <input type="text" name="direccion_calle" value="{{$datos->direccion_calle}}" class="form-control" readonly>
            </div>
            <div class="col-4">
                Colinia: <input type="text" name="direccion_colonia" class="form-control" value="{{$datos->direccion_colonia}}" readonly>
            </div>
        </div>
        <div class="row">            
            <div class="col-4">
                Localidad: <input type="text" name="direccion_localidad" class="form-control" value="{{$datos->direccion_localidad}}" readonly>
            </div>
            <div class="col-4">
                Municipio: <input type="text" name="direccion_municipio" class="form-control" value="{{$datos->direccion_municipio}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Estatus: 
                <select name="estatus" id="estatus" class="form-control">
                    <option value="0">Estatus</option>
                    <option value="1">En espera</option>
                    <option value="2">Reprogramada</option>
                    <option value="3">Atendida</option>
                </select>

                </Select>
            </div>            
        </div>
        <div class="row">
          <div class="col-8">
            Observaciones: 
            <input type="text" name="observaciones" id="observaciones" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            Medicamentos: 
            <input type="text" name="medicamentos" id="medicamentos" class="form-control">
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
@endforeach
@endsection