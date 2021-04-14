@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <center>
      <h2>Emergencias</h2>
  </center>
</div>
    <div class="container">
      <a href="{{url('admin/formulario_emer')}}">
        <button type="button" class="btn btn-outline-info btn-sm">Registrar Nueva Institución</button>
      </a><br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID Institución</th>
            <th scope="col">Nombre De La Institución</th>
            <th scope="col">Telefono De La Institución</th>
            <th scope="col">Zona</th>
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
                <form action="{{url('emergenciass/emerdelele', $emergencia->id_institucion)}}" method="POST">
                  <a href="{{url('admin/emergenciasedit/'.$emergencia->id_institucion)}}">
                    <button type="button" class="btn btn-secondary">
                      <img src="https://image.flaticon.com/icons/png/512/104/104668.png" width="20">
                    </button>
                  </a>
                  @csrf @method('DELETE')
                  <button type="submit" onclick="return confirm('Eliminar')"class="btn btn-outline-danger">
                      <img src="https://img.icons8.com/wired/64/000000/delete.png" whidth="20" height="20">
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection