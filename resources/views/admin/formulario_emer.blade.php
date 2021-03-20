@extends('layouts.app2')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <center>
      <h2>Registro De Instituciones De Emergencias</h2>
  </center>
</div>
    <!-- /.content -->
    <div class="container">
      <form action="{{url('admin/registraremer')}}" method="post">        
        <div class="row">
          <div class="col-5">
              Nombre de la Institución: <input type="text" name="nombre" id="nombre" class="form-control">
          </div>          
        </div>
        <div class="row">
          <div class="col-5">
            Telefono: <input type="text" name="telefono" id="telefono" class="form-control">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            Zona: <input type="text" name="zona" id="zona" class="form-control">
          </div>
        </div>
        </div><br>
        <div class="row">
          <div class="col-4">
            <input type="submit" value="Registrar" class="btn btn-success">
          </div>
          <div class="col-4">
            <input type="reset" value="Cancelar" class="btn btn-danger">
          </div>
        </div>
      </form>
    </div>  
@endsection