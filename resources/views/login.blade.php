@extends('layouts.app4')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="content"><br>
      <table>
        <caption>Inicia sesión o regístrate para que puedas tener una consulta a domicilio con el doctor que sea de tu agrado </caption>
        <tr>
          <td>
            <form name="login" action="{{route('validar')}}" method="POST">
              {{csrf_field()}}
              <img class="mb-4" src="https://image.freepik.com/vector-gratis/logotipo-cuidado-salud_20448-137.jpg"  width="150" height="auto  ">
              <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>                          
              <label for="correo" class="sr-only">Correo Electrónico</label>
              <input type="text" name="email" class="form-control form-control-sm" placeholder="Correo" >
              <label for="password" class="sr-only">Contraseña</label>
              <input type="password" name="pass" class="form-control form-control form-control-sm" placeholder="Contraseña" >    
              <div class="checkbox mb-3">
                <label>
                  <input type="checkbox" value="remember-me"> Recordarme
                </label>
              </div>
              <div class="alert"><?php echo isset($alert) ? $alert : '';  ?></div>
              <div class="row">
                <div class="col-3 ">
                  <a href="{{route('register')}}">
                    <button class="btn btn-sm btn-outline-secondary">
                      Registrate
                    </button>
                  </a>    
                </div>
                <div class="col-2"></div>
                <div class="col-7  order-md-2">
                  <button class="btn btn-sm btn-outline-success btn-block" type="submit">Inicia Sesión</button>
                </div>
              </div>
            </form>
          </td>
          <td></td><td><td>
          <td align="center">
            <img class="mb-4" src="{{asset('img/sesion.png')}}"  width="750" height="450">
          </td>
        </tr>
      </table>                
    </div>
  </div>
</div>
@endsection
