@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h2>Historial Medico</h2>
    </center>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Folio Cita</th>
            <th scope="col">Paciente</th>
            <th scope="col">Medico</th>
            <th scope="col">Fecha / Hora</th>
            <th scope="col">Estatus</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datos as $dato)
          <tr>
            <td>{{$dato->id_cita}}</td>
            <td>{{$dato->nombre_paciente}} {{$dato->apellido_paciente}}</td>
            <td>{{$dato->nombre}} {{$dato->apellido_paterno}}</td>
            <td>{{$dato->fecha_cita}}  {{$dato->hora_cita}}</td>
            <td>{{$dato->estatus}}</td>
            <td>{{$dato->tipo_cita}}</td>
            <td>
              <a href="{{url('admin/detalles/'.$dato->id_cita)}}">
                <button class="btn btn-outline-secondary btn-sm">
                  Ver Más Detalles
                </button>  
              </a>
              <a href="{{url('admin/modificar_cita/'.$dato->id_cita)}}">
                <button class="btn btn-outline-info btn-sm">
                  Modificar Cita
                </button>
              </a>
              <form action="{{url('admin/cancelar', $dato->id_cita)}}" method="POST">
                @method('PATCH')                
                <button type="submit" onclick="return confirm('Cancelar')"class="btn btn-outline-danger btn-sm">
                  Cancelar Cita
                </button>
              </form>
              </a>
            </td>
          </tr>          
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection