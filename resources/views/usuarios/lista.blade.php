@extends('proyecto.app')
@section('title', 'Alex')
@section('content')
Inicio (Despliegue de datos)
<h2 class="text-center md-5">Usuarios</h2>
<div class="container">    
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
            @foreach($usuarios as $usuario)
                <tr>                
                    <td>{{$usuario->id}}</td>
                    <td>{{$usuario->nombre}}</td>
                    <td>{{$usuario->apellido}}</td>
                    <td>{{$usuario->correo}}</td>
                    <td>{{$usuario->telefono}}</td>
                    <td><form action="{{route('delete', $usuario->id)}}" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Aceptar')" class="btn btn-danger">
                            <img src="https://img.icons8.com/wired/64/000000/delete.png" whidth="20" height="20">
                        </button>
                    </td>
                </tr>
            @endforeach        
        </tbody>
    </table>
</div>
    