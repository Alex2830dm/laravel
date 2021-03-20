@extends('layouts.app')
@section('content')
<script type="text/javascript">                        
  $(document).ready(function(){
      var close = '';
      var after = '';
      //--------------------------------------
      $("tr").click(function(){
          $("#info"+close).text('');
          after = close;
              //console.log('*'+after);
          
          close = $(this).attr("id");


          var id_usuario = $(this).attr("id");
          
          if(close == after){
              $("#info"+ after).text('');
              close = '';
          }else{
              $("#info"+id_usuario).load('js01?id_usuario=' + id_usuario).css({"background":"#0C3"});
          }
      });
  })
</script>
    <div class="container">
      <a href="{{route('registrar')}}">
        <button type="button" class="btn btn-outline-info btn-sm">Registrar Nuevo</button>
      </a><br>
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
            <tr id="{{$usuario->id_usuario}}">
              <td>
                <img src="{{asset('img/'.$usuario->foto)}}" height="70">
              </td>
              <td>{{$usuario->id_usuario}}</td>
              <td><?php echo $usuario->apellido_paterno . ' ' . $usuario->apellido_materno . ' ' . $usuario->nombre; ?></td>
              <td>{{$usuario->telefono}}</td>
              <td>{{$usuario->perfil}}</td>
              <td>
                <form action="{{url('emergenciass/usuariosdelete', $usuario->id_usuario)}}" method="POST">
                  <button type="button" class="btn btn-outline-secondary" id="detalles">
                    Ver detalles
                  </button>                  
                    <button type="button" class="btn btn-outline-info">
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
            <tr id="{{$usuario->id_usuario}}">
              <td colspan="6">
                <div id="info{{$usuario->id_usuario}}"></div> 
              </td>
            </tr>          
          @endforeach
        </tbody>
      </table>
    </div>
@endsection 