@extends('proyecto.app')
@section('title', 'Alex')
@section('content')
<br><br><br>
<table>
    <caption>Inicia sesión o regístrate para que puedas tener una consulta a domicilio con el doctor que sea de tu agrado </caption>
    <tr>
      <td>
        <form  action="#" method="POST">          
          <a href="#"><img class="mb-4" src="https://alex2830.000webhostapp.com/logo.png"  width="150" height="100"></a>
          <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>                          
          <label for="correo" class="sr-only">Correo Electrónico</label>
          <input type="text" name="correo" class="form-control form-control-sm" placeholder="Correo" >                          
          <label for="password" class="sr-only">Contraseña</label>
          <input type="password" name="password" class="form-control form-control form-control-sm" placeholder="Contraseña" >    
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Recordarme
            </label>
          </div>        
          <div class="row">
            <div class="col-3 ">
              <a class="btn btn-sm btn-outline-danger" href="../Registrar/index.html">Registrate</a>
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
      <img class="mb-4" src="https://alex2830.000webhostapp.com/Iconos/sesion.png"  width="650" height="400">
      </td>
    </tr>
  </table>