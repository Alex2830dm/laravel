<table class="table table-hover">
    <thead>
        <tr>
            <td colspan="8">Datos de los usuarios registrados en HS</td>
        </tr>
        <tr>        
            <th scope="col">ID Usuario</th>
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Perfil</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Creación</th>
            <th scope="col">Modificación</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>          
                <td>{{$usuario->id_usuario}}</td>
                <td><?php echo $usuario->app  . ' ' . $usuario->apm . ' ' . $usuario->nombre; ?></td>
                <td>{{$usuario->telefono}}</td>
                <td>{{$usuario->perfil == 1? "Administrador":($usuario->perfil == 2? "Usuario" : "Medico")}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->password}}</td>
                <td>{{$usuario->created_at}}</td>
                <td>{{$usuario->updated_at}}</td>
            </tr>
      @endforeach
    </tbody>
</table>