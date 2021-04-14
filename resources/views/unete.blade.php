@extends('layouts.app4')
@section('content')
@section('content')
<div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"><br><br>
        <center>
        <div class="sidebar-sticky pt-3">          
          <a href="Informacion.html">
            <img src="../Iconos/Doctor.jpg" width="90" height="100" ><br>
          </a>
        </div>
      </center>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <center>
            <h1 class="h2">Healthcare System</h1>
          </center>
        </div>
        <font face="Comic Sans MS,Arial,Verdana" size=6 color="red"> Se buscan Doctores(a) Para Que Puedan Ser Parte Del Equipo Healthcare System y Sus Servicios</font><br>
        <font face="Comic Sans MS,Arial,Verdana" size=4 >Requisitos:
            <li>Cedula Profesional</li><li>Titulo</li><li>Carta de Recomendacion</li>
            <li>En un documento redactardar:
                <ul>
                    <li>Dirección donde se darán las consultasen consultorio</li>
                    <li>Precio de consultas en consultorio</li>
                    <li>Precio de consultas a domicilio</li>
                    <li>Número de contacto</li>
                    <li>Dias y horario de consultas</li>
                </ul>
            </li>
        </font>
        <font face="Comic Sans MS,Arial,Verdana" size=2 color="#AFAFAF">
          Nota: Todo lo anterior se tiene que mandar en un mismo documento (PDF), se les hará llegar a los administradores <br>
          y ellos verán si es aceptada la solicitud.
        </font>
        <div class="row">
          <div class="col-6">
            <form action="enviar.php" method="POST">
              <label for="nombre">Nombre:</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
              <label for="correo">Correo:</label>
              <input type="email" name="correo" id="correo" class="form-control">
              <label for="mensaje">Mensaje:</label>
              <input type="text" name="mensaje" id="mensaje" class="form-control" placeholder="Ejem: 'Buenos días, esta es mi solicitud'">
              <label for="archivo">Archivo</label>
              <input type="file" name="archivo" id="archivo" class="form-control"><br>
              <div class="row">
                <div class="col-3">
                  <button class="btn btn-sm btn-outline-danger btn-block" type="reset">Cancelar</button>
                </div>              
                <div class="col-3">
                  <button class="btn btn-sm btn-outline-success btn-block" type="submit">Enviar</button>
                </div>
              </div> <br><br>
            </form>
          </div>
        </div>
        
      </main>
    </div>
  </div>
@endsection