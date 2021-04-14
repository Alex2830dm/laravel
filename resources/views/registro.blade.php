@extends('layouts.app4')
@section('scripts')
<script type="text/javascript">
  $(document).ready(function(){
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
        $("#stel").text("Tiene que contener 10 digitos");
      }else if(tel.length == 10){
        $("#telefono").css({"color": "#0FC714", "border": "1px solid #0FC714"});
      }else{
        $("#telefono").css({"color": "#FF0707"});
        $("span.stel").text("Solo debe contener 10 digitos");
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
  <h1>Registrate :)</h1>
  </center>
</div>
<br><br>    
  <div class="container">    
    <div class="row">
      <div class="col-md-8">        
        <div class="card">
          <div class="card-header">Registrate en Healthcare System y disfruta de los servicios que ofrecemos</div>
          <div class="card-body">
            <form method="POST" action="{{route('registrarusu')}}" enctype="multipart/form-data">
              @csrf
              <div class="form-group row justify-content-center">                  
                <div class="col-8">
                  <label for="name">Nombre: </label>  
                  <input type="text" name="nombre" id="nombre" class="form-control">
                  <td><span id="sname" class="sname">Error: en el nombre !!!</span></td>
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-4">
                  <label for="app" >Primer Apellido: </label>
                  <input type="text" name="app" id="app" class="form-control">                  
                </div>                  
                <div class="col-4">
                  <label for="apm">Segundo Apellido: </label>
                  <input type="text" name="apm" id="apm" class="form-control">                  
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-4">
                  <label for="telefono">Telefono: </label>
                  <input type="text" name="telefono" id="telefono" class="form-control">
                  <td><span id="stel" class="stel"></span></td>
                </div>
                <div class="col-4">
                  <label for="Zona">Zona: </label>
                  <input type="text" name="zona" id="zona" class="form-control">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-4">
                  <label for="email">E-mail: </label>
                  <input type="mail" name="email" id="email" class="form-control">
                  <td><span id="smail" class="smail"></span></td>
                </div>
                <div class="col-4">
                  <label for="pass">Password: </label>
                  <input type="password" name="pass" id="pass" class="form-control">
                  <td><span id="spass" class="spass"></span></td>
                </div>
              </div>
              <input type="numbre" name="perfil" id="perfil" class="form-control" value="1" hidden readonly>
              <div class="form-group row justify-content-center">
                <div class="col-6">
                  <label for="text">Foto de Perfil: </label>
                  <input type="file" name="foto" id="foto" class="form-control">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-outline-success btn-sm">
                    Registrar
                  </button>
                  <button type="reset" class="btn btn-outline-danger btn-sm">
                    Cancelar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
