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
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Edad</th>
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
                    <td>{{$practica->apellido}}</td>
                    <td>{{$practica->correo}}</td>
                    <td>{{$practica->edad}}</td>
                    <td>{{$practica->id_materia}}</td>
                    <td>{{$practica->nombre_materia}}</td>
                    <td>
                        <form action="{{route('delete', $practica->id)}}" method="POST">
                            <a href="{{url('practica/modificar', $practica->id)}}"><button type="button" class="btn btn-outline-secondary">
                                <img src="https://img.icons8.com/carbon-copy/100/000000/view-details.png" whidth="20" height="20"/>
                            </button></a>
                                <a href="#"><button type="button" class="btn btn-outline-success">
                                    <img src="https://img.icons8.com/cute-clipart/64/000000/edit.png" whidth="20" height="20">
                            </button></a>
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Aceptar')"class="btn btn-outline-danger">
                                <img src="https://img.icons8.com/wired/64/000000/delete.png" whidth="20" height="20">
                            </button>
                        </form> 
                    </td>
                </tr>
            @endforeach        
        </tbody>
    </table>
</div>
@endsection