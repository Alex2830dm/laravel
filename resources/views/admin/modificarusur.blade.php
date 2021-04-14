@extends('layouts.app2')
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
    $('#mostrar').hide();
    $('#mostrar1').hide();
    $('#mostrar2').hide();
    $('#mostrar3').hide();
    $('#mostrar4').hide();
		$('#perfil').click(function(){
      var mostrar = $("#perfil").val();
      if(mostrar == 1){
        $('#mostrar').hide();
        $('#mostrar1').hide();
        $('#mostrar2').hide();
        $('#mostrar3').hide();
        $('#mostrar4').hide();
      }else if(mostrar == 2){
        $('#mostrar').hide();
        $('#mostrar1').hide();
        $('#mostrar2').hide();
        $('#mostrar3').hide();
        $('#mostrar4').hide();
      }
      else if(mostrar == 3){
        $('#mostrar').show();
        $('#mostrar1').show(); //muestro mediante id
        $('#mostrar2').show(); //muestro mediante id
        $('#mostrar3').show(); //muestro mediante id
        $('#mostrar4').show(); //muestro mediante id
      }						
		 });		
	});
</script>
@endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <center>
  <h2>Modificacion de datos del usuario: {{$edit->nombre}}</h2>
  </center>
</div>
    <div class="container">
      <form action="{{url('emergenciass/usuariosupdate', $edit->id_usuario)}}" method="post">        
        @method('PATCH')        
        <table>
          <tr>
            <td colspan="4"> ---------- Datos Personales ----------</td>
          </tr>
          <tr>
            <td>Nombre:</td>
            <td colspan="2"><input type="text" name="nombre" id="nombre" class="form-control" value="{{$edit->nombre}}"></td>
            <td><span id="sname" class="sname"></span></td>
          </tr>
          <tr>
            <td>Apellido Paterno: </td>
            <td><input type="text" name="app" id="app" class="form-control" value="{{$edit->apellido_paterno}}"></td>
            

            <td>Apellido Materno</td>
            <td><input type="text" name="apm" id="apm" class="form-control" value="{{$edit->apellido_materno}}"></td>
            <td><span id="sapm" class="sapm"></span></td>
          </tr>
          <tr>
            <td>Telefono: </td>
            <td><input type="text" name="telefono" id="nombre" class="form-control" value="{{$edit->telefono}}"></td>
            <td>Perfil: </td>
            <td>
              <select name="perfil" id="perfil" class="form-control">
                <option value="0">Selecciona un Perfil</option>
                <option value="1">Administrador</option>
                <option value="2">Usuario</option>
                <option value="3">Medico</option>
              </select>
            </td>
          </tr>
          <tr id="mostrar">
            <td colspan="4"> ---------- Datos Especialidades Y Consultorio ----------</td>
          </tr>
          <tr id="mostrar1">                        
            <td>Cedula(s): </td>
            <td><input type="text" name="cedulas" id="cedula" class="form-control"></td>
            <td>Especialidad(es): </td>
            <td><input type="text" name="especialidades" id="especialidades" class="form-control"></td>
          </tr>
          <tr id="mostrar2">
            <td>Precio Consulta: </td>
            <td><input type="text" name="precio_consulta" id="precio_consulta" class="form-control"></td>
            <td>Precio Consulta A Domicilio: </td>
            <td><input type="text" name="precio_consulta_dom" id="precio_consulta_dom" class="form-control"></td>
          </tr>
          <tr id="mostrar3">
            <td>Calle del Consultorio</td>
            <td><input type="text" name="consultorio_calle" id="consultorio_calle" class="form-control"></td>
            <td>Colonia del Consultorio</td>
            <td><input type="text" name="consultorio_colonia" id="consultorio_colonia" class="form-control"></td>
          </tr>
          <tr id="mostrar4">
            <td>Localidad del Consultorio</td>
            <td><input type="text" name="consultorio_localidad" id="consultorio_calle" class="form-control"></td>
            <td>Municipio del Consultorio</td>
            <td><input type="text" name="consultorio_municipio" id="consultorio_colonia" class="form-control"></td>
          </tr>
          <tr>
            <td colspan="4"> ---------- Correo y Contraseña ----------</td>
          </tr>                   
        </table>
        <table>
          <tr>
            <td>Foto del Pefil.......</td>
            <td><input type="file" name="foto" id="foto" class="form-control"></td>
          </tr>
          <tr>
            <td><input type="submit" value="Registrar" class="btn btn-success"></td>
            <td><input type="reset" value="Cancelar" class="btn btn-danger"></td>
          </tr>
        </table>        
@endsection