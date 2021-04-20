@extends('layouts.app3')
@section('content')

<script type="text/javascript">                       
    $(document).ready(function(){
        var close = '';
        var after = '';
        //--------------------------------------
        $("button").click(function(){
            $("#info"+close).text('');
            after = close;
            //console.log('*'+after);
            
            close = $(this).attr("id");
  
  
            var id_usuario = $(this).attr("id");
            
            if(close == after){
            $("#info"+ after).text('');
            close = '';
            }else{
            $("#info"+id_usuario).load('js03?id_usuario=' + id_usuario).css({"background":"#FBE8E4"});
            }
        });
    })
</script>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
        <h2>Doctores</h2>
    </center>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID Usuario</th>
            <th scope="col">Nombre</th>            
            <th scope="col">Telefono</th>
            <th scope="col">Cedula(s)</th>
            <th scope="col">Especialidad(es)</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody> 
    @foreach ($doctor as $doctor)       
        <tr >
            <td>{{$doctor->id_usuario}}</td>
            <td>{{$doctor->nombre}} {{$doctor->primer_apellido}}</td>
            <td>{{$doctor->telefono}}</td>
            <td>{{$doctor->cedulas}}</td>
            <td>{{$doctor->especialidades}}</td>            
            <td>
                <button class="btn btn-outline-secondary btn-sm" id="{{$doctor->id_usuario}}">
                    Ver Más Detalles
                </button>
            </td>
        </tr>
        <tr >
            <td colspan="6">
              <div id="info{{$doctor->id_usuario}}"></div> 
            </td>
        </tr> 
    @endforeach
    </tbody>
  </table>
@endsection