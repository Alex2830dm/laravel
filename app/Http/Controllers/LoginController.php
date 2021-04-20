<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuarios;


class LoginController extends Controller
{
    public function login(){
        return view('login');        
    }
    public function validar(Request $request){
        $email = $request->input('email');
        $pass = $request->input('pass');

        $consulta = Usuarios::where('email', '=', $email)
            ->where('password', '=', $pass)
            ->where('activo', '=', 1)
        ->get();
        if(count($consulta) == 0 ){ //sino existe el usuario, retorna al login
            //dd('No existe el usuario'.$email);
            return redirect()->route("login");
        }else{
            //---------- Crea las variables de Session -------------------
            $request->session()->put('session_id', $consulta[0]->id_usuario);
            $request->session()->put('session_name', $consulta[0]->nombre);
            $request->session()->put('session_app', $consulta[0]->app);
            $request->session()->put('session_apm', $consulta[0]->apm);
            $request->session()->put('session_telefono', $consulta[0]->telefono);
            $request->session()->put('session_foto', $consulta[0]->foto);
            $request->session()->put('session_tipo', $consulta[0]->perfil);
            //---------- Consulta las sesion -----------------------------
            $session_id = $request->session()->get('session_id'); 
            $session_name = $request->session()->get('session_name'); 
            $session_tipo = $request->session()->get('session_tipo'); 

            if($session_tipo == 1){
                //return "contenido.admin";
                return redirect("admin/perfil");
            }else if($session_tipo == 2){  
                //dd($email);
                //return "contenido.usuarios";
                return redirect("usuario/perfil");
            }else if($session_tipo == 3){
                //dd($email);
                //return "contenido.otros";
                return redirect("medico/perfil");
            }        
        }
    }
    public function logout(Request $request){
        //-------- Destrulle sesiones
        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');

        return redirect()->route("login");
    }
}
