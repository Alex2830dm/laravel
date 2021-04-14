<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuarios;
use App\EmergenciasModel;
use App\CitasModel;

class UsuariosController extends Controller
{
    public function perfil(){        
        $tip_usu = session('session_tipo');        
        if($tip_usu == 2){
            $id_usuario = session('session_id');
            //dd($id_usuario);        
            $perfil = Usuarios::find($id_usuario);
            if(is_null($perfil) ){ 
                abort(404); 
                //return "contenido 404";
                //return view("contenido.404");
            }
            return view("usuarios.perfil")->with(['perfil' => $perfil]);
        }
        else{
            return redirect()->route("login");
        }
    }
    public function editusu($id)
    {
        $tip_usu = session('session_tipo');        
        if($tip_usu == 2){
            //return view('home', ['usuario'=> User::findOrFail($id)]);
            return view('usuarios.modificar', ['edit'=> Usuarios::findOrFail($id)]);
            //return response()->json(['edit' => Usuarios::findOrFail($id)]);   
        }
        else{
            return redirect()->route("login");
        }     
    }
    public function updusu(Request $request, $id){
        $usu = Usuarios::findOrFail($id);
        $usu->nombre = request('name');
        $usu->apellido_paterno = request('app');
        $usu->apellido_materno = request('apm');
        $usu->telefono = request('telefono');
        $usu->update();
        //return response()->json(['usuarios' => $usu]);
        return redirect('usuario/perfil');
    }
    public function docs(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 2){
            $perfil  = 3;
            $doctor    = Usuarios::where('perfil', $perfil)->get();
            return view('usuarios.doctores')->with(['doctor' => $doctor]);
            //return response()->json($doctor);  
        }
        else{
            return redirect()->route("login");
        }               
    }
    public function datosd($id)
    {
        $tip_usu = session('session_tipo');        
        if($tip_usu == 2){
            return view('usuarios.citas', ['datos'=> Usuarios::findOrFail($id)]);
            //return response()->json(['datos'=> Usuarios::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }    
    }
    public function emer(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 2){
            $emergencias = EmergenciasModel::all();
            //return response()->json(['emergencias', $emer]);
            return view('usuarios.emergencias')->with(['emergencias' => $emergencias ]); 
        }
        else{
            return redirect()->route("login");
        }         
    }    
    public function registrocita(Request $request){
        $cita = new CitasModel;
        $cita->id_medico = request('id_medico'); //cambiar al request
        $cita->id_usuario = request('id_usuario');
        $cita->nombre_paciente = request('nombre_paciente');
        $cita->apellido_paciente = request('apellidos_paciente');
        $cita->tipo_cita = request('tipo_cita');
        $cita->costo_cita = request('costo_cita');
        $cita->fecha_cita = request('fecha');
        $cita->hora_cita = request('hora');
        $cita->estatus = "pendiente";
        $cita->telefono_contacto = request('telefono_contacto');
        $cita->direccion_calle = request('direccion_calle');
        $cita->direccion_colonia = request('direccion_colonia');
        $cita->direccion_localidad = request('direccion_localidad');
        $cita->direccion_municipio = request('direccion_municipio');        
        $cita->save();
        //return response()->json(['citas' => $cita]);
        return redirect('usuario/historial/'. $cita->id_usuario);
    }
    public function historial(){
        $id_usuario = session('session_id');
        $tip_usu = session('session_tipo');
        if($tip_usu == 2){
            $datos    = CitasModel::where('id_usuario', $id_usuario)->orderBy('tipo_cita')->get();
            return view('usuarios.historial')->with(['datos' => $datos]);
            //return response()->json(['datos' => $datos]);        
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function datosc($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 2){
            $datos    = CitasModel::where('id_usuario', $id)->get();
            return view('usuarios.historial')->with(['datos' => $datos]);
            //return response()->json(['datos' => $datos]);
        }
        else{
            return redirect()->route("login");
        }        
        
    }    
    public function modificarc($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 2){
            return view('medicos.modificarc', ['datos'=> CitasModel::findOrFail($id)]);
        //return response()->json(['datos'=> CitasModel::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function updcita(Request $request, $id){        
        $cita = CitasModel::findOrFail($id);        
        $cita->nombre_paciente = request('nombre');
        $cita->apellido_paciente = request('apellidos');
        $cita->tipo_cita = request('tipo_cita');
        $cita->costo_cita = request('costo_cita');
        $cita->fecha_hora_cita = request('fecha_hora');
        $cita->estatus = "pendiente";
        $cita->telefono_contacto = request('telefono_contacto');
        $cita->direccion_calle = request('direccion_calle');
        $cita->direccion_colonia = request('direccion_colonia');
        $cita->direccion_localidad = request('direccion_localidad');
        $cita->direccion_municipio = request('direccion_municipio');                
        $cita->update();
        //return response()->json(['citas' => $cita]);
        return redirect('medico/historial');
    }
}