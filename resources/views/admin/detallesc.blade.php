@extends('layouts.app2')
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
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <center>
    <h2>Detalles de Cita del Paciente: {{$datos->nombre_paciente}}</h2>
    </center>
</div>
<div class="container">    
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
            Nombre del medico: <input type="text" name="nombre" " class="form-control" readonly>
        </div>
        <div class="col-4">
            Apellidos del medico: <input type="text" name="apellidos"  class="form-control" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            Nombre del paciente: <input type="text" name="nombre_paciente" value="{{$datos->nombre_paciente}}" class="form-control" readonly>
        </div>
        <div class="col-4">
            Apellidos del paciente: <input type="text" name="apellidos_paciente" value="{{$datos->apellido_paciente}}" class="form-control" readonly>
        </div>
    </div>
        <div class="row">
            <div class="col-4">
                Tipo cita:
                <input type="text" id="tipo_cita" name="tipo_cita" value="{{$datos->tipo_cita}}" class="form-control" readonly>                
            </div>
            <div class="col-4">
                Costo cita <input type="text" name="costo_cita" id="costo_cita" class="form-control" value="{{$datos->costo_cita}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                Fecha consulta <input type="date" name="fecha" value="{{$datos->fecha_cita}}" class="form-control" readonly>
            </div>
            <div class="col-2">
                Hora consulta <input type="text" name="hora" class="form-control" placeholder="HH:MM:SS" value="{{$datos->hora_cita}}" readonly>
            </div>
            <div class="col-4">
                Telefono de contacto del paciente: <input type="text" value="{{$datos->telefono_contacto}}" class="form-control" name="telefono_contacto" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                Calle: <input type="text" name="direccion_calle" class="form-control" id="d1" value="{{$datos->dcalle}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Colinia: <input type="text" name="direccion_colonia" class="form-control" id="d2" value="{{$datos->dcolonia}}" readonly>
            </div>
            <div class="col-4">
                Localidad: <input type="text" name="direccion_localidad" class="form-control" id="d3" value="{{$datos->dlocalidad}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                Municipio: <input type="text" name="direccion_municipio" class="form-control" id="d4" value="{{$datos->dmunicipio}}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                Observaciones:
                <textarea name="observaciones" id="observaciones" cols="5" rows="" class="form-control" readonly>{{$datos->observaciones}}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                Medicamentos:
                <textarea name="medicamentos" id="medicamentos" cols="5" rows="" class="form-control" readonly>{{$datos->medicamentos}}</textarea>
            </div>
        </div>
        <br><hr>        
        <div class="row">
            <div class="col-4">
                <a href="{{url('admin/historial/'.$datos->id_usuario)}}">
                    <button class="btn btn-outline-secondary ">
                      Regresar Al Historial
                    </button>  
                  </a>
            </div>
            <div class="col-4">
                <a href="{{url('admin/modificar_cita/'.$datos->id_cita)}}">
                    <button class="btn btn-outline-info">
                      Modificar Cita
                    </button>  
                </a>
            </div>
        </div>
</div>
@endsection