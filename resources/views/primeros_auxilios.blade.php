@extends('layouts.app4')
@section('content')
<div class="row"><br><br></div>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <img src="../Iconos/Servicios.png" width="25" height="25">
              Servicios <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <img src="../Iconos/Primeros-auxilios.png" width="25" height="25">
              Primeros Auxilios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Emergencias.php">
              <img src="../Iconos/Emergencias.png" width="25" height="25">
              Emergencias
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Iniciar sesion/index.html">
              <img src="../Iconos/Usuarios.png" width="30" height="25">
              Usuarios
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Contenido de la pagina </span>            
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <A class="nav-link" href="#primero">
              <span data-feather="file-text"></span>
              Primeros Auxilios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#segundo">
              <span data-feather="file-text"></span>
              Consejos generales en el protocolo de actuación de primeros auxilios
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tercero">
              <span data-feather="file-text"></span>
              Primeros auxilios para problemas comunes
            </a>
          </li>            
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <A name="primero"></A>
      <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <center>
          <h1 class="h2">Primeros Auxilios</h1>
        </center>
      </div>
      <font face="Cambria" size=4 align="justify"><em>
          Los primeros auxilios son el conjunto de actuaciones y técnicas que permiten la atención inmediata de una
          persona
          accidentada hasta que llega la asistencia médica profesional. Esta primera asistencia facilita que las
          lesiones
          sufridas no empeoren y la evolución de la persona accidentada dependerá de esta actuación.<br>
          Ante una posible emergencia se debe seguir una secuencia que se conoce como soporte vital básico. El
          objetivo de la
          atención de los primeros auxilios es:
          <li>Mantener vivo al accidentado.</li>
          <li>Evitar nuevas lesiones o complicaciones.</li>
          <li>Poner al accidentado lo antes posible en manos de servicios médicos.</li>
          <li>Aliviar el dolor.</li>
          <li>Evitar infecciones o lesiones secundarias.</li>
          <u>Conocer lo esencial en relación a los primeros auxilios puede ayudar a salvar una vida y a que no
            corramos
            riesgos mientras asistimos a una persona.</u><br>
          Hay una importante diferencia entre intentar ayudar y ayudar con los conocimientos básicos. Tener formación
          en
          primeros auxilios nos permite reconocer una emergencia y auxiliar sin peligro hasta que llegue un
          profesional.
          Puede que nuestra intención de ayudar sea buena, pero si vamos a correr un riesgo o existe la posibilidad de
          poner
          en riesgo a la persona que queremos ayudar es mejor no actuar.<br>
        </em></font>
        <A name="segundo"></A>
      <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Consejos generales en el protocolo de actuación de primeros auxilios</h1>
      </div>
      <font face="Cambria" size=4 align="justify"><em>
          <li>Actuar con rapidez pero conservando la calma.</li>
          <li>Evitar aglomeraciones</li>
          <li>Saber imponerse.</li>
          <li>No mover a la persona herida salvo que sea imprescindible.</li>
          <li>Traslado adecuado (como norma general no inmovilizar al accidentado y si hubiera que hacerlo, moverlo en
            bloque).</li>
          <li>No dar al herido de beber, comer o medicar.</li>
          <li>Tranquilizar al herido.</li>
          <li>Mantener al herido caliente.</li>
          <li>Hacer solo lo imprescindible.</li>
          <li>Si no se sabe, abstenerse.</li>
        </em></font>
        <A name="tercero"></A>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Primeros auxilios para problemas comunes</h1>
      </div>
        <table class="table table-danger table-striped table-hover table-bordered">            
          <thead>
            <tr>
              <th> Situación </th>
              <th> Atención  </th>
            </tr>
          </thead>
          <tbody>
          <font face="Comic Sans MS,Arial,Verdana" size=4>
            <tr>
              <td>Actuar ante una insolación</td>
              <td>Coloca a la persona afectada en un lugar seco y sombreado, dale de beber agua a pequeños sorbos y si está consciente, quítale la ropa y refréscale con agua.<br>
                 Si, además de insolación, se produce alguna quemadura, un ungüento antiséptico y con propiedades anestésicas mitigará el dolor y evitará las infecciones.</td>
            </tr>
            <tr>
              <td>Extraer una astilla</td>
              <td>Sumerge la zona afectada en agua caliente 10 minutos y frota la astilla a contrapelo para que salga.
                <br> Si no lo consigues, rasga con un alfiler esterilizado la piel que la cubre y extráela con unas pinzas. Limpia la herida con un desinfectante y coloca una tirita.</td>
            </tr> 
            <tr>
              <td>Fracturas</td>
              <td>Inmoviliza la zona para evitar que se dañen los nervios y los vasos sanguíneos. 
                <br>Hazlo con tablillas o un cabestrillo (se puede utilizar para ello un pañuelo o tela), y lleva al afectado a un servicio de urgencias.</td>
            </tr> 
            <tr>
              <td>Hacer un torniquete</td>
              <td>Para hacer un torniquete busca una tela elástica que te permita dar varias vueltas en torno a la extremidad afectada. 
                <br>Enróllala y ata los extremos. Atraviésala con un palo y gírala para hacer fuerza. 
                <br>Aflójala cuando el miembro herido se amorate y espera hasta recuperar el color normal.
              </td>
            </tr> 
            <tr>
              <td>El boca a boca, cuando falta aire</td>
              <td>Para hacer el boca a boca, extrae cualquier objeto de la boca del afectado.<br>
                  Colócale la cabeza hacia atrás con la barbilla levantada y los brazos a lo largo del cuerpo.<br>
                  Sujeta la barbilla con una mano al tiempo que le abres la boca y pinzas la nariz con los dedos de la otra.<br>
                  Coge aire e insúfalo despacio en su boca, mirando el tórax para comprobar que se eleva.<br>
                  Repítelo 15 veces por minuto.
                </td>
            </tr> 
            <tr>
              <td>Heridas</td>
              <td>Límpialas con agua y jabón. 
                <br>Repasa la zona con una gasa estéril, Desinféctala con un antiséptico, tápala con una gasa y fíjala con esparadrapo. 
                <br>Si es profunda, el médico valorará si hay que poner la vacuna antitetánica.
              </td>
            </tr> 
            <tr>
              <td>Quemaduras</td>
              <td>Enfría la zona lesionada con agua. 
                <br>Si es superficial, puedes aplicar una pomada antiséptica yodada específica y cubrirla con una gasa estéril para evitar que se infecte, hasta que el médico la observe.<br>
                 Si es grave, hay que acudir urgentemente a un centro sanitario.
              </td>
            </tr>   
            <tr>
              <td>Atragantamiento</td>
              <td>Si es un niño el que se ha tragado un cuerpo extraño, colócalo cabeza abajo y dale golpes pequeños y rápidos entre los omóplatos para facilitar que salga.
                <p>Si es un adulto, agárrale por detrás con fuerza, a la altura del estómago, y dale un apretón brusco.</p>
              </td>
            </tr>
            <tr>
              <td>Desinfectar las mordeduras</td>
              <td>Si te ha mordido un perro o un gato, lava completamente la herida con agua y jabón y aclárala con agua y sal tan caliente como puedas resistirla. 
                <br>Cúbrela con una tela gruesa esterilizada para que no se infecte. 
                <br>Acude rápidamente al médico para que la trate y diga qué vacunas poner.</td>
            </tr> 
          </font>              
          </tbody>            
    </main>
  </div>
</div>
@endsection