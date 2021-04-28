@extends('layouts.app2')
@section('content')
<script type="text/javascript">                        
  $(document).ready(function(){
      var close = '';
      var after = '';
      //--------------------------------------
      $("button").click(function(){
          $("#info"+close).text('');
          after = close;
              //console.log('*'+after);
          
          close = $(this).attr("id");


          var id_usuario = $(this).attr("id");
          
          if(close == after){
              $("#info"+ after).text('');
              close = '';
          }else{
              $("#info"+id_usuario).load('js01?id_usuario=' + id_usuario).css({"background":"#FBE8E4"});
          }
      });
  })
</script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <center>
      <h2>Usuarios / Doctores / Administradores</h2>
  </center>
</div>
    <div class="container">
      <div class="row">
        <div class="col-4">
          <a href="{{url('admin/registro')}}">
            <button type="button" class="btn btn-outline-info btn-sm">Registrar Nuevo</button>
          </a>
        </div>
        <div class="col-4">
          <a href="{{ route ('users.excel')}}">
            <button type="button" class="btn btn-outline-success btn-sm">Exportar Usuarios</button>
          </a>
        </div>
        <!--<div class="col-4">
          <form method="POST" action="{{route ('users.import.excel')}}" enctype="multipart/form-data">
            <input type="file" name="file" class="form-control form-control-sm">
            <input type="submit" value="Importar Usuarios" class="btn btn-outline-secondary btn-sm">
          </form>
        </div>-->
      </div>                
      <br>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Foto</th>
            <th scope="col">ID Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Perfil</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($usuarios as $usuario)
            <tr>
              <td>
                <img src="{{asset('img/'.$usuario->foto)}}" height="70">
              </td>
              <td>{{$usuario->id_usuario}}</td>
              <td><?php echo $usuario->app  . ' ' . $usuario->apm . ' ' . $usuario->nombre; ?></td>
              <td>{{$usuario->telefono}}</td>
              <td>{{$usuario->perfil == 1? "Administrador":($usuario->perfil == 2? "Usuario" : "Medico")}}</td>
              <td>               
                <button class="btn btn-outline-secondary btn-sm" id="{{$usuario->id_usuario}}">
                  Ver detalles
                </button>                
              </td>
            </tr>
            <tr>
              <td colspan="6">
                <div id="info{{$usuario->id_usuario}}"></div> 
              </td>
            </tr>          
          @endforeach
        </tbody>
      </table>
    </div>
@endsection 