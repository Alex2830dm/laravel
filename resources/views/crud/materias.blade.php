@extends('layaout.app')
@section('title', 'Alex')
@section('content')
<h2 class="text-center md-5">Usuarios</h2>
<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="{{url('practica/formulario')}}"><button type="button" class="btn btn-outline-secondary">
                Añadir
            </button></a>
        </div>
        <div class="col-3">
            <a href="{{url('practica/materias')}}"><button type="button" class="btn btn-outline-secondary">
                Materias
            </button></a>
        </div>
    </div>    
    <table class="table table-bordered table-strpied text-center">
        <tead class="thead-light">
            <tr>            
                <th>Id</th>              
                <th>Nombre Materia</th>
                <th>Eliminar</th>
            </tr>
        </tead>
        <tbody>
            @foreach($practicas as $practica)
                <tr>                
                    <td>{{$practica->id}}</td>
                    <td>{{$practica->nombre}}</td>                                
                </tr>
            @endforeach        
        </tbody>
    </table>
</div>
@endsection