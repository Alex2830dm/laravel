<?php
//echo $usu;
if(count($usus) == 0 ){?>
    <script>
        $("#img").attr('src', 'img/shadown.png');
    </script>
<?php
}else{?>
    @foreach ($usus as $usu)
        <hr>    
        <h4>Información del Usuario</h4>
        <table>
            <tr>
                <td rowspan="6"><img src="{{asset('img/'.$usu->foto)}}" alt="Foto del usuario" width="250" height="auto"></td>
                <td>ID: {{$usu->id_usuario}}</td>            
            </tr>
            <tr>
                <td>Nombre Completo: {{$usu->apellido_paterno}} {{$usu->apellido_materno}} {{$usu->nombre}}</td>
            </tr>
            <tr>
                <td>Telefono: {{$usu->telefono}} </td>
            </tr>
            <tr>
                <td>Correo: {{$usu->email}}</td>
            </tr>
            <tr>
                <td> Perfil: {{$usu->perfil}} </td>
            </tr>
            <tr>
                <td>                
                <a href="{{url('admin/citas/'.$usu->id_usuario)}}">
                    <button class="btn btn-outline-info btn-sm">
                        Agendar Cita
                    </button>
                </a>
                <a href="tel:+ $usu->telefono">
                    <button class="btn btn-outline-success btn-sm">
                        Llamar
                    </button>
                </a>
                <form action="{{url('admin/usuariosdelete', $usu->id_usuario)}}" method="POST">
                    <a href="{{url('admin/usuariosedit/'.$usu->id_usuario)}}">
                      <button type="button" class="btn btn-outline-primary btn-sm">
                        Editar 
                      </button>
                    </a>
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Eliminar')"class="btn btn-outline-danger btn-sm">
                        Eliminar
                    </button>
                </form>
            </td>
            </tr>
        </table>        
    @endforeach
<?php
}?>