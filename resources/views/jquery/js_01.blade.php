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
                <td rowspan="6"><img src="{{asset('img/'.$usu->foto)}}" alt="Foto del usuario" width="100" height="auto"></td>                           
            </tr>
            <tr>
                <td>Nombre Completo: {{$usu->apellido_paterno}} {{$usu->apellido_materno}} {{$usu->nombre}}</td>
                <td>Telefono: {{$usu->telefono}} </td>
                <td>Cedula(s): {{$usu->cedulas}}</td>
            </tr>            
            <tr>
                <td>Correo: {{$usu->email}}</td>            
                <td>Perfil: {{$usu->perfil == 1? "Administrador":($usu->perfil == 2? "Usuario" : "Medico")}}</td>
                <td>Especialidades: {{$usu->especialidades}}</td>
            </tr>
            <tr>
                <td colspan="3">
                    Dirección de Consultorio: {{$usu->consultorio_calle}}, {{$usu->consultorio_colonia}}, {{$usu->consultorio_localidad}}, {{$usu->consultorio_municipio}}
                </td>
            </tr>
            <tr>
                <td>Precio Consulta: $ {{$usu->precio_consulta}} MXN</td>
                <td>Precio Consulta a Domicilio: $ {{$usu->precio_consulta_dom}} MXN</td>
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
                </td>
                <td>
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