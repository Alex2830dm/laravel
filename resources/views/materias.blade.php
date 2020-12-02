@extends('layaout.app')
@section('title', 'Alex')
@section('content')
<h2 class="text-center md-5">Usuarios</h2>
<div class="container">
    <div class="row">
        <div class="col-3">
            <a href="{{url('practica/mat')}}"><button type="button" class="btn btn-outline-secondary">
                Añadir
            </button></a>
        </div>
        <div class="col-3">
            <a href="{{url('practica/lista')}}"><button type="button" class="btn btn-outline-secondary">
                Usuarios
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
            @foreach($materias as $materia)
                <tr>                
                    <td>{{$materia->id}}</td>
                    <td>{{$materia->nombre}}</td>
                    <td>
                        <form action="#" method="POST">
                            <a href="#"><button type="button" class="btn btn-outline-secondary">
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