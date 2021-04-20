@extends('layouts.app2')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Administrador | Registrar institución</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>    
    </section>
    <!-- /.content -->
    <div class="container">
      <form action="{{url('admin/emergenciasupdate', $edit->id_institucion)}}" method="post">
        @method('PATCH')
        <div class="row">
          <div class="col-5">
              Nombre de la Institución: <input type="text" name="nombre" id="nombre" class="form-control" value="{{$edit->nombre_institucion}}">
          </div>          
        </div>
        <div class="row">
          <div class="col-5">
            Telefono: <input type="text" name="telefono" id="telefono" class="form-control" value="{{$edit->telefono_institucion}}">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            Zona: <input type="text" name="zona" id="zona" class="form-control" value="{{$edit->zona_institucion}}">
          </div>
        </div>
        </div><br>
        <div class="row">
          <div class="col-4">
            <input type="submit" value="Actualizar" class="btn btn-success">
          </div>
          <div class="col-4">
            <input type="reset" value="Cancelar" class="btn btn-danger">
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection