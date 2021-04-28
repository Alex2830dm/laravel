@extends('layouts.app')
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        var precio = $('#precio').val();        
        var precio_dom = $('#precio_dom').val();
        var costo = $("#costo_cita");
        var dcal = $("#dcal").val(), dcol = $("#dcol").val(), dloc = $("#dloc").val(), dmun = $("#dmun").val();
        var d1 = $("#d1"), d2 = $("#d2"), d3 = $("#d3"), d4 = $("#d4");
        $('#tipo_cita').click(function(){
            var tipo = $('#tipo_cita').val();
            costo.val(precio);
            d1.val(dcal), d2.val(dcol), d3.val(dloc), d4.val(dmun);
        });
        $('#tipo_cita2').click(function(){
            d1.val(""), d2.val(""), d3.val(""), d4.val("");
            var tipo = $('#tipo_cita').val();
            costo.val(precio_dom);
        })
    });
</script>
@endsection
@section('content')
@foreach ($datos as $datos)
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h2>Agendar Una Cita Con: {{$datos->nombre}}</h2>
    </center>
</div>
<div class="container">
    <form action="{{url('usuario/updatec', $datos->id_cita)}}" method="post">    
        @method('PATCH')
        <div class="row">
            <div class="col-4">
                <input type="text" name="id_usuario" value="{{session('session_id')}}" hidden>
            </div>
            <div class="col-4">
                <input type="text" name="id_medico" value="{{$datos->id_usuario}}" hidden>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Nombre del medico: <input type="text" name="nombre" value="{{$datos->nombre}}" class="form-control" readonly>
            </div>
            <div class="col-4">
                Apellidos del medico: <input type="text" name="apellidos" value="{{$datos->app}}" class="form-control" readonly>
            </div>
            <div class="col-2">
                <input type="text" name="precio" id="precio" value="{{$datos->pconsulta}}" class="form-control" hidden readonly>
            </div>
            <div class="col-2">
                <input type="text" id="precio_dom" value="{{$datos->pconsulta_dom}}" class="form-control" hidden readonly>
                <input type="text" id="dcal" value="{{$datos->ccalle}}" class="form-control" readonly hidden>
                <input type="text" id="dcol" value="{{$datos->ccolonia}}" class="form-control" hidden readonly>
                <input type="text" id="dloc" value="{{$datos->clocalidad}}" class="form-control" hidden readonly>
                <input type="text" id="dmun" value="{{$datos->cmunicipio}}" class="form-control" hidden readonly>
            </div>           
        </div>
        <div class="row">
            <div class="col-4">
                Nombre del paciente: <input type="text" name="nombre_paciente" value="{{$datos->nombre_paciente}}" class="form-control">
            </div>
            <div class="col-4">
                Apellidos del paciente: <input type="text" name="apellidos_paciente" value="{{$datos->apellido_paciente}}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-4">                
                Selecciona el tipo de cita <br>
                <input type="radio" id="tipo_cita" name="tipo_cita" value="consultorio"> En consultorio    
                <input type="radio" id="tipo_cita2" name="tipo_cita" value="domicilio"> A domicilio                
            </div>
            <div class="col-4">
                Costo cita <input type="text" name="costo_cita" id="costo_cita" class="form-control" value="{{$datos->costo_cita}}">
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                Fecha consulta <input type="date" name="fecha" value="{{$datos->fecha_cita}}" class="form-control">
            </div>
            <div class="col-2">
                Hora consulta <input type="text" name="hora" class="form-control" placeholder="HH:MM:SS" value="{{$datos->hora_cita}}">
            </div>
            <div class="col-4">
                Telefono de contacto del paciente: <input type="text" value="{{$datos->telefono_contacto}}" class="form-control" name="telefono_contacto">
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                Calle: <input type="text" name="direccion_calle" class="form-control" id="d1" value="{{$datos->dcalle}}">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Colinia: <input type="text" name="direccion_colonia" class="form-control" id="d2" value="{{$datos->dcolonia}}">
            </div>
            <div class="col-4">
                Localidad: <input type="text" name="direccion_localidad" class="form-control" id="d3" value="{{$datos->dlocalidad}}">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Municipio: <input type="text" name="direccion_municipio" class="form-control" id="d4" value="{{$datos->dmunicipio}}">
            </div>
        </div>        
    </div><br><hr>
    <div class="row">
        <div class="col-4">
            <input type="submit" value="Actualizar Cita" class="btn btn-outline-success">
        </div>        
    </div>
    </form> 
    <a href="{{url('usuario/historial')}}">
        <button class="btn btn-outline-danger">Cancelar</button>
    </a>
    @endforeach
</div>
@endsection