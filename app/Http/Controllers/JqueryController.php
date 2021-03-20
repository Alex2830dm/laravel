<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\EmergenciasModel;

class JqueryController extends Controller
{
    public function js01(Request $request){
        $id_usuario  = $request->get('id_usuario');    
        //dd($id_usuario);    
        $usus    = Usuarios::where('id_usuario', '=', $id_usuario)->get();
        //dd($usus);
        return view("jquery/js_01")->with(['usus' => $usus]);
    }
    public function js02(Request $request){
        $id_usuario  = $request->get('id_usuario');    
        //dd($id_usuario);    
        $usus    = Usuarios::where('id_usuario', '=', $id_usuario)->get();
        //dd($usus);
        return view("jquery/js_02")->with(['usus' => $usus]);
    }
    public function js03(Request $request){
        $id_usuario  = $request->get('id_usuario');    
        //dd($id_usuario);    
        $usus    = Usuarios::where('id_usuario', '=', $id_usuario)->get();
        //dd($usus);
        return view("jquery/js_03")->with(['usus' => $usus]);
    }
}
