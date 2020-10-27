@extends('layaout.app')
@section('title', 'Alex')
@section('content')
Inicio (Despliegue de datos)
<h2 class="text-center md-5">Usuarios</h2>
<table class="table table-bordered table-strpied text-center">
    <tead class="thead-light">
        <tr>            
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correp</th>
            <th>Edad</th>
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
                <td><form action="{{route('delete', $practica->id)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Aceptar')" class="btn btn-danger">
                        <img src="https://img.icons8.com/wired/64/000000/delete.png" whidth="20" heigth="20">
                    </button>
                </td>
            </tr>
        @endforeach        
    </tbody>