@extends('layouts.app2')
@section('buscador')
<form class="form-inline ml-3">
  <div class="input-group input-group-sm">
    <input class="form-control form-control-navbar" type="search" name="buscar" placeholder="Buscar" aria-label="Buscar">
    <div class="input-group-append">
      <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
      </button>                  
    </div>
  </div>              
</form>
@endsection
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
        <table>
          <tr>
            <td>
              <a href="{{url('admin/registro')}}">
                <button type="button" class="btn btn-outline-info btn-sm">Registrar Nuevo</button>
              </a>
            </td>
            <td>
              <a href="export-list-pdf">
                <button type="button" class="btn btn-outline-danger btn-sm">Exportar Usuarios en PDF</button>
              </a>
            </td>
            <td>
              <a href="{{ route ('users.excel')}}">
                <button type="button" class="btn btn-outline-success btn-sm">Exportar Usuarios en Excel</button>
              </a>
            </td>
            <form method="POST" action="{{route ('users.import.excel')}}" enctype="multipart/form-data">
              @csrf
              <td>
                <input type="file" name="file" class="form-control form-control-sm">
              </td>
              <td>
                <input type="submit" value="Importar Usuarios" class="btn btn-outline-secondary btn-sm">
              </td>
            </form>            
          </tr>        
        </table>                
        </div>
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