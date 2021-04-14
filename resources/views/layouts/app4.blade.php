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
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script> <!--Jquery - Funciones -->
    <script src="{{asset('js/jquery-ui.js')}}"></script>    <!--Jquery - Theme  q-->
    @yield('scripts')
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
            <a class="nav-link text-white" href="{{url('/')}}">Inicio<span class="sr-only">(current)</span></a>
          </li>
        </h6>
        <h6>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="{{url('quienes_somos')}}" role="button" aria-haspopup="true" aria-expanded="false">¿Quienes Somos?</a>
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
    @yield('content')
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="{{asset('dist1/js/vendor/jquery.slim.min.js')}}"><\/script>
      <script src="{{ asset('dist1/js/bootstrap.bundle.js') }}"></script></body>
      
</html>