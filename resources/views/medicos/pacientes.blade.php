@extends('layouts.app3')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h2>Historial De Pacientes</h2>
    </center>
</div>
<div class="container">
  <a href="{{ route ('citas.excel')}}">
    <button type="button" class="btn btn-outline-success btn-sm">Exportar Registro De Citas</button>
  </a><br><br>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Folio Cita</th>
            <th scope="col">Paciente</th>        
            <th scope="col">Estatus</th>
            <th scope="col">Fecha</th>      
            <th scope="col">Tipo De Cita</th>    
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($datos as $dato)
            <tr>
                <td>{{$dato->id_cita}}</td>
                <td>{{$dato->nombre_paciente}} {{$dato->apellido_paciente}}</td>                
                <td>{{$dato->estatus}}</td>
                <td>{{$dato->fecha_cita}}</td>
                <td>{{$dato->tipo_cita}}</td>
                <td>                                    
                  <a href="{{url('medico/detalles',$dato->id_cita)}}">
                    <button class="btn btn-outline-secondary btn-sm">
                      Ver Más Detalles
                    </button>
                  </a>              
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection