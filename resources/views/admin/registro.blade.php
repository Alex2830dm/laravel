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
  //-----------------------------------------
  $("span.sname").css({
      "visibility": "hidden"
    });
    $('#nombre').keyup(function(){
      var txtname = $('#nombre').val();
      var formato = /^[A-Za-z\_\-.\s\xF1\xD1]+$/;
      if(formato.test(txtname)){
        $("#nombre").css({"border": "1px solid #0F0"})
      }else{
        $("#nombre").css({"border": "1px solid #F00"})
        $("span.sname").css({
          "visibility": "visible"
        });
      }
    });
    $('#app').keyup(function(){
      var txtapp = $('#app').val();
      var formato = /^[A-Za-z\_\-.\s\xF1\xD1]+$/;
      if(formato.test(txtapp)){
        $("#app").css({"border": "1px solid #0F0"}).fadeIn(2000);
      }else{
        $("#app").css({"border": "1px solid #F00"}).fadeIn(2000);
      }
    });
    //---------------------------------------                
    $('#apm').keyup(function(){
      var txtapp = $('#app').val();
      var formato = /^[A-Za-z\_\-.\s\xF1\xD1]+$/;
      if(formato.test(txtapp)){
        $("#apm").css({"border": "1px solid #0F0"}).fadeIn(2000);
      }else{
        $("#apm").css({"border": "1px solid #F00"}).fadeIn(2000);
      }
    });
    //----------------------------
    $("#email").blur(function(){
      var txtmail = $("#email").val();
      var valmail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;                    
      if(valmail.test(txtmail)){
        $("#email").css({"border": "1px solid #0FC714"});
      }else{
        $("#smail").text("incorrecto");
      }
    });
    //----------------------------
    $("span.stel").css({ "visibility": "hidden" });
    $("#telefono").keyup(function(){      
      var tel = $("#telefono").val();      
      if(tel.length < 10){
        $("#telefono").css({"color": "#FF0707"});
        $("#stel").css({ "visibility": "visible" });        
      }else if(tel.length == 10){
        $("#telefono").css({"color": "#0FC714", "border": "1px solid #0FC714"});
      }else{
        $("#telefono").css({"color": "#FF0707"});
        $("#stel").show();
      }
    })
    //----------------------------
    $('#pass').keyup(function() {
      var txtpass1 = $("#pass").val();
      var valmayus = /[A-Z]/g;
      var valminus = /[a-z]/g;
      var valnum = /[0-9]/g;
      var valcarac = /[.,#,_,-,@]/;
      var men1 = "Una Mayuscula";
      var men = "Una Minuscula";
      var men3 = "Un Numero";
      var men4 = "Un Caracter Especial";
      if(valmayus.test(txtpass1)){
        if(valminus.test(txtpass1)){
          if(valnum.test(txtpass1)){
            if(valcarac.test(txtpass1)){
              $("#spass").text("Contraseña Segura");
            }else{
              $("#spass").text("La Contraseña Debe Contener Un Caracter Especial");
            }                                
          }else{
            $("#spass").text("Contraseña Debe Contener un Numero");
          }
        }else{
          $("#spass").text("Contraseña debe contener minusculas");                            
        }
      }else{
        $("#spass").text("Contraseña debe contener mayusculas");
      }     
      if (txtpass1.length >= 8) {
        $("#pass").css({"color": "#0FC714"});                        
      }else if (txtpass1.length >= 6){
        $("#pass").css({"color": "#E9E315"});                        
      }else{
        $("#pass").css({"color": "#FF0707"});                        
      }
    });
  })
</script>
@endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <center>
      <h2>Registro de Usuarios</h2>
  </center>
</div>
    <div class="container">
      <form action="{{url('admin/registrar')}}" method="post" enctype="multipart/form-data">        
        <table>
          <tr>
            <td colspan="4"> ---------- Datos Personales ----------</td>
          </tr>
          <tr>
            <td>Nombre:</td>
            <td colspan="2"><input type="text" name="nombre" id="nombre" class="form-control"></td>
            <td><span id="sname" class="sname">Error: en el nombre !!!</span></td>
          </tr>
          <tr>
            <td>Apellido Paterno: </td>
            <td><input type="text" name="app" id="app" class="form-control"></td>

            <td>Apellido Materno</td>
            <td><input type="text" name="apm" id="apm" class="form-control"></td><br><span id="sapm" class="sapm"></span></td>
          </tr>
          <tr>
            <td>Telefono: </td>
            <td><input type="text" name="telefono" id="telefono" class="form-control"></td>
            <td><span id="stel" class="stel">Tienen que ser 10 digitos</span></td>
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
          <tr>
            <td>Correo: </td>
            <td><input type="mail" name="email" id="email" class="form-control"></td>
            <td><span id="smail" class="smail"></span></td>
            <td>Password</td>
            <td><input type="password" name="password" id="pass" class="form-control"></td>
            <td><span id="spass" class="spass"></span></td>
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
      </form>
    </div>
@endsection
