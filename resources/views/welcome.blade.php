<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Healthcare System</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="{{asset('dist1/js/adminlte.js')}}"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('dist1/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist1/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>
  <body>
    <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
    <img src="images/Logo2.png" width="70" height="40">
    <a class="navbar-brand" href="index.php">   Healthcare System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">   
      <ul class="navbar-nav mr-auto">
        <h6>
          <li class="nav-item active">
            <a class="nav-link text-white" href="{{route('/')}}">Inicio<span class="sr-only">(current)</span></a>
          </li>
        </h6>
        <h6>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="{{route('quienes_somos')}}" role="button" aria-haspopup="true" aria-expanded="false">¿Quienes Somos?</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('quienes_somos')}}">¿Quienes Somos?</a>
              <a class="dropdown-item" href="{{route('informacion')}}">Unete a Healthceare System</a>              
            </div>
          </li>
        </h6>
        <h6>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="{{route('primeros_auxilios')}}" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{route('primeros_auxilios')}}">Primeros Auxilios</a>
              <a class="dropdown-item" href="{{route('emergencias')}}">Emergencias</a>                        
            </div>
          </li>
        </h6>  
        <h6>
          <li class="nav-item active">
          <a class="nav-link text-white" href="{{route('doctores')}}">Doctores<span class="sr-only">(current)</span></a>
          </li>
        </h6>
        </h6>
      </ul>                    
      <a href="{{ route('login') }}" class="text-white">Login </a> |                       
      <a href="{{ route('register') }}" class="text-white"> Register</a>      
    </div>
  </nav>
</header>

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

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <a href="#"  class="text-secondary">
          <img src="images/Ambulancia.png" height="120" width="120">
          <h2>Emergencia</h2>
          <p>Si necesitas atencion inmediata por un accidente con gravedad<br><br></p>
        </a>
        <p><a class="btn btn-secondary" href="#" role="button">Pedir ayuda &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="#"  class="text-secondary">
          <img src="images/Servicios.png" height="120" width="120">
          <h2>Primeros Auxilios</h2>
          <p>Conoce informacion sobre los primeros auxilios y como los puedes tratar<br><br></p>
        </a>
        <p><a class="btn btn-secondary" href="#" role="button">Informate&raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="#"  class="text-secondary">
          <img src="images/Doctores.png" height="120" width="120">      
          <h2>Doctores</h2>
          <p>Podras ver información sobre los doctores con los que contamos y así podras tener una cita con ellos</p>
          OIRyxkQ7QvG*W@!aBx%n
        </a>
        <p><a class="btn btn-secondary" href="#" role="button">Miralos Aquí&raquo;</a></p>
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
        <img src="images/Imss.jpeg" width="350" height="200">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">    
        <img src="images/Cruz Roja.jpg" width="350" height="200">
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
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="{{asset('dist1/js/vendor/jquery.slim.min.js')}}"><\/script>
      <script src="{{ asset('dist1/js/bootstrap.bundle.js') }}"></script></body>
      
</html>

