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
                <a href="{{url('medico/citas/'. $usu->id_usuario)}}">
                    <button class="btn btn-info">
                        <img src="https://i.pinimg.com/originals/6c/25/5a/6c255accf94f52b16eb3845ee47bc3bf.png" alt="Agendar Cita" width="30">
                    </button>
                </a>
                <a href="tel:+ $usu->telefono">
                    <button class="btn btn-light">
                        <img src="https://images.vexels.com/media/users/3/208095/isolated/preview/c22e7ea3682fb9172f443ce6fbf33d7d-icono-de-trazo-de-llamada-by-vexels.png" alt="llamada" width="20">
                    </button>
                </a>
                
            </td>
            </tr>
        </table>        
    @endforeach
<?php
}?>