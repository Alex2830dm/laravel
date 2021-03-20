@extends('layouts.app3')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <center>
      <h2>Citas Del Día: {{now()->toDateString('Y-m-d')}}</h2>
  </center>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Folio Cita</th>
            <th scope="col">Paciente</th>
            <th scope="col">Tipo de Cita</th>
            <th scope="col">Fecha y Hora</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datos as $dato)
            <tr>
                <td>{{$dato->id_cita}}</td>
                <td>{{$dato->nombre_paciente}} {{$dato->apellido_paciente}}</td>
                <td>{{$dato->tipo_cita}}</td>                
                <td>{{$dato->fecha_cita}} {{$dato->hora_cita}}</td>
                <td>                                    
                    <a href="{{url('medico/cita_paciente', $dato->id_cita)}}">
                      <button type="button" class="btn btn-outline-info btn-sm">
                        Atender Cita
                      </button>
                    </a>                    
                  </form>
                  </a>
                </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection