@extends('proyecto.app')
@section('title', 'Alex')
@section('content')
Inicio (Despliegue de datos)
<h2 class="text-center md-5">Usuarios</h2>
<div class="container">    
    <button type="submit"  class="btn btn-success"href="{{url('proyecto/doctores/formulario')}}">Agregar Nuevo Doctor</button> <br><br>
    <table class="table table-bordered table-strpied text-center">
        <tead class="thead-light">
            <tr>            
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Cedula</th>
                <th>Telefono</th>
                <th>Eliminar</th>
            </tr>
        </tead>
        <tbody>
            @foreach($doctores as $doctor)
                <tr>                
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->nombre}}</td>
                    <td>{{$doctor->apellido}}</td>
                    <td>{{$doctor->correo}}</td>
                    <td>{{$doctor->cedula}}</td>
                    <td>{{$doctor->telefono}}</td>
                    <td><form action="{{route('eliminar', $doctor->id)}}" method="POST">
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
    