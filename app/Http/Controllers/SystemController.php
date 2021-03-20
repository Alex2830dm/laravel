<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuarios;
use App\EmergenciasModel;
use App\DoctoresModel;

class SystemController extends Controller
{
    public function admin(){
        $id_usuario = session('session_id');
            //dd($id_usuario);

        //---------------------------------------
        $usu1 = UsuariosModel::find($id_usuario);
            //dd($usu1);
        $usu2 = UsuariosModel::where('id_usuario', $id_usuario)->get();        
            //dd($usu2);
        $usu3 = UsuariosModel::Buscar($id_usuario)->get();
            //dd($usu3);
        $usu4 = \DB::select('SELECT * FROM tb_usuarios WHERE id_usuario ='.$id_usuario);
            //dd($usu4);
        if(is_null($usu1) ){ 
            abort(404); 
            //return "contenido 404";
            //return view("contenido.404");
        }
        if( count($usu2) == 0 ){ abort(404); }

        return view("contenido.admin")
            ->with(['usu1' => $usu1])
            ->with(['usu2' => $usu2])
            ->with(['usu3' => $usu3])
            ->with(['usu4' => $usu4]);
    }
    public function usuarios(Request $request){
        $tip_usu = session('session_tipo');
        //dd('entro)M
        if($tip_usu == 2){
            $usus = UsuariosModel::Nombre($request->get('nombre'))
                ->Tipo($request->get('tipo'))
                ->orderBy('id_usuario')
                ->paginate(3);

            return view("contenido.usuarios")
                ->with(['usus' => $usus]);
        }
        else{
            return redirect()->route("login");
        }
    }
    public function otros(){
        $tip_usu = session('session_tipo');
            //dd('entro);
        if($tip_usu == 3){
            echo "Sistema.otros";            
        }
        else{
            return redirect()->route("login");
        }
    }
    public function storeusu(Request $request)
    {
        $usu = new Usuarios;
        $usu->nombre = request('nombre');
        $usu->apellido_paterno = request('app');
        $usu->apellido_materno = request('apm');
        $usu->telefono = request('telefono');
        $usu->zona = request('zona');
        $usu->email = request('email');
        $usu->password = request('pass');
        $usu->perfil = 2;        
        if($request->hasFile('foto')){
            $file = $request->foto;
            $file->move(public_path(). '/img', $file->getClientOriginalName());
            $usu->foto = $file->getClientOriginalName();
        }
        $usu->save();
        //return response()->json(['usuarios' => $usu]);
        return redirect('login');
    }
    public function emergencias(){
        $emergencias['emergencias'] = EmergenciasModel::all();
        return view("emergencias", $emergencias);        
    }
    public function doctores(){        
        $perfil  = 3;
        $doctor    = Usuarios::where('perfil', $perfil)->get();        
        return view('doctores')->with(['doctor' => $doctor]);
        //return response()->json($doctores);        
    }
}
