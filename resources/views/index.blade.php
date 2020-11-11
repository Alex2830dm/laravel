@extends('proyecto.app')
@section('content')
<main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner active">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Agenda Una Cita</h1>
            <p>Agenda una cita con nuestros doctores disponibles, elige el que sea de tu confianza.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Ir A La Agenda</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Ten Una Cita Urgente</h1>
            <p>Si necesitas a alguna atención medica al momento, llama a algún doctor que se encuentre cerca de ti.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Ir Al Directorio</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Conoce A Nuestro Sector Salud</h1>
            <p>Puedes visualizar los hospitales con los que estamos relacionados</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Ve A Conocer</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
    <br><br>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <a href="#"  class="text-secondary">
          <img src="https://alex2830.000webhostapp.com/Iconos/Ambulancia.png" height="120" width="120">
          <h2>Emergencia</h2>
          <p>Si necesitas atencion inmediata por un accidente con gravedad<br><br></p>
        </a>
        <p><a class="btn btn-secondary" href="#" role="button">Pedir ayuda &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="#"  class="text-secondary">
          <img src="https://alex2830.000webhostapp.com/Iconos/Servicios.png" height="120" width="120">
          <h2>Primeros Auxilios</h2>
          <p>Conoce informacion sobre los primeros auxilios y como los puedes tratar<br><br></p>
        </a>
        <p><a class="btn btn-secondary" href="#" role="button">Informate&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="#"  class="text-secondary">
          <img src="https://alex2830.000webhostapp.com/Iconos/Doctores.png" height="120" width="120">      
          <h2>Doctores</h2>
          <p>Podras ver información sobre los doctores con los que contamos y así podras tener una cita con ellos</p>
        </a>
        <p><a class="btn btn-secondary" href="../Doctores-consultas/index.html" role="button">Miralos Aquí&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row">
      <div class="col-lg-6">      
        <h2>IMSS</h2>
        <font face="Comic Sans MS,Arial,Verdana" size=4 color="red">INSTITUTO MEXICANO DEL SEGURO SOCIAL</font><br>
        <font face="Comic Sans MS,Arial,Verdana" size=2 color="#9A9898">Puedes visualizar la pagina oficial del IMMS para que puedas tener un segumiento de algún servicio que te puedas brindar</font>
        <p><a class="btn btn-secondary" href="http://www.imss.gob.mx/" role="button">Ir al sitio&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-6">
        <img src="../Iconos/Imss.jpeg" width="350" height="200">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">    
        <img src="../Iconos/Cruz Roja.jpg" width="350" height="200">
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-6">        
        <h2>ISSEMYN</h2>
        <font face="Comic Sans MS,Arial,Verdana" size=4 color="red">CRUZ ROJA MEXICANA</font><br>
        <font face="Comic Sans MS,Arial,Verdana" size=2 color="#9A9898">Si estas interesado en ser parte de su equipo, puedes informarte a travez de su pagina oficial</font>
        <p><a class="btn btn-secondary" href="https://www.cruzrojamexicana.org.mx/" role="button">Ir al sitio&raquo;</a></p>
      </div><!-- /.col-lg-4 -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>&copy; 2017-2020 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
@endsection