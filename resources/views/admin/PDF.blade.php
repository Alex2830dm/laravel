<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div class="alert alert-primary" role="alert">
            Datos de los usuarios registrados en HS
      </div>
    <table class="table table-bordered">
        <thead>            
            <tr>        
                <th scope="col">ID Usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Perfil</th>
                <th scope="col">Email</th>            
                <th scope="col">Creación</th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>          
                    <td>{{$user->id_usuario}}</td>
                    <td><?php echo $user->app  . ' ' . $user->apm . ' ' . $user->nombre; ?></td>
                    <td>{{$user->telefono}}</td>
                    <td>{{$user->perfil == 1? "Admin":($user->perfil == 2? "Usuario" : "Medico")}}</td>
                    <td>{{$user->email}}</td>                
                    <td>{{$user->created_at}}</td>                    
                </tr>
          @endforeach
        </tbody>
    </table>
  </body>
</html>