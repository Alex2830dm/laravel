@extends('layouts.app4')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <center>
      <h2>Doctores</h2>
  </center>
</div>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Especialidades</th>
            <th scope="col">Cedulas</th>
            <th scope="col">Llamar</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($doctor as $doctor)
            <tr>
              <td>{{$doctor->id_usuario}}</td>
              <td>{{$doctor->nombre}} {{$doctor->primer_apellido}}</td>
              <td>{{$doctor->telefono}}</td>
              <td>{{$doctor->especialidades}}</td>
              <td>{{$doctor->cedulas}}</td>              
              <td>
                <a href="tel:+ $doctor->telefono_institucion">
                    <button class="btn btn-secondary">
                        <img src="https://images.vexels.com/media/users/3/208095/isolated/preview/c22e7ea3682fb9172f443ce6fbf33d7d-icono-de-trazo-de-llamada-by-vexels.png" alt="llamada" width="20">
                    </button>
                </a>                
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection