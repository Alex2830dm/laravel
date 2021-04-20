<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\EmergenciasModel;
use App\CitasModel;

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
    public function js04(Request $request){
        $id_cita  = $request->get('id_cita');    
        //dd($id_usuario);    
        $usus    = CitasModel::where('id_cita', '=', $id_cita)->get();
        //dd($usus);
        return view("jquery/js_04")->with(['usus' => $usus]);
    }
}
