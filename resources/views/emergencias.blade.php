@extends('layouts.app4')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h1>Direcctorio de Institcuiones de Emergencias</h1>
    </center>
</div>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Perfil</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($emergencias as $emergencia)
            <tr>
              <td>{{$emergencia->id_institucion}}</td>
              <td>{{$emergencia->nombre_institucion}}</td>
              <td>{{$emergencia->telefono_institucion}}</td>
              <td>{{$emergencia->zona_institucion}}</td>
              <td>
                <a href="tel:+ $emergencia->telefono_institucion">
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