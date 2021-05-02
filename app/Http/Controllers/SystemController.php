<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuarios;
use App\EmergenciasModel;
use App\DoctoresModel;
use App\CitasModel;
use App\Http\Requests\UsuariosRequest;
use App\Http\Requests\CitasRequest;

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
    public function registro(){
        return view('registro');
    }
    public function storeusu(UsuariosRequest $request){              
        $usu = new Usuarios;
        $usu->nombre = request('nombre');
        $usu->app = request('app');
        $usu->apm = request('apm');
        $usu->telefono = request('telefono');
        $usu->municipio = request('municipio');
        $usu->email = request('email');
        $usu->password = request('pass');
        $usu->sexo = request('sexo');
        $usu->perfil = true;
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
        $tip_usu = session('session_tipo');
        $emergencias['emergencias'] = EmergenciasModel::all();        
        if($tip_usu == 1){
            return view("admin.emergencias", $emergencias);
        }else if($tip_usu == 2){
            return view("usuarios.emergencias", $emergencias);
        }else if($tip_usu == 3){
            return view("medicos.emergencias", $emergencias);
        }
        else{
            return view("emergencias", $emergencias);
        }
    }
    //perfil de los usuarios
    public function perfil(){
        $tip_usu = session('session_tipo');
        $id_usuario = session('session_id');
        $perfil = Usuarios::find($id_usuario);
        if($tip_usu == 1){
            return view("admin.perfil")->with(['perfil' => $perfil]);
        }else if($tip_usu == 2){
            return view("usuarios.perfil")->with(['perfil' => $perfil]);
        }else if($tip_usu == 3){
            return view("medicos.perfil")->with(['perfil' => $perfil]);
        }
        else{
            return redirect()->route("login");
        }
    }
    //direcctorio de doctores
    public function doctores(){
        $tip_usu = session('session_tipo');
        $perfil  = 3;
        $doctor    = Usuarios::where('perfil', $perfil)->get();
        if($tip_usu == 1){                        
            return view('admin.doctores')->with(['doctor' => $doctor]);
        }else if($tip_usu == 2){
            return view('usuarios.doctores')->with(['doctor' => $doctor]);
        }else if($tip_usu == 3){
            return view('medicos.doctores')->with(['doctor' => $doctor]);
        }
        else{
            return view('doctores')->with(['doctor' => $doctor]);
        }        
    }
    //información de un doctor especifico para la consulta
    public function datosd($id){
        $tip_usu = session('session_tipo');
        if($tip_usu == 1){                        
            return view('admin.citas', ['datos'=> Usuarios::findOrFail($id)]);
            //return response()->json(['datos'=> Usuarios::findOrFail($id)]);
        }else if($tip_usu == 2){
            return view('usuarios.citas', ['datos'=> Usuarios::findOrFail($id)]);
            //return response()->json(['datos'=> Usuarios::findOrFail($id)]);
        }else if($tip_usu == 3){
            return view('medicos.citas', ['datos'=> Usuarios::findOrFail($id)]);
            //return response()->json(['datos'=> Usuarios::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }     
    }
    //registro de consulta/cita
    public function registrocita(CitasRequest $request){
        $tip_usu = session('session_tipo');
        $cita = new CitasModel;
        $cita->id_medico = request('id_medico');
        $cita->id_usuario = request('id_usuario');
        $cita->nombre_paciente = request('nombre_paciente');
        $cita->apellido_paciente = request('apellidos_paciente');
        $cita->tipo_cita = request('tipo_cita');
        $cita->costo_cita = request('costo_cita');
        $cita->estatus = "pendiente";
        $cita->fecha_cita = request('fecha');
        $cita->hora_cita = request('hora');
        $cita->telefono_contacto = request('telefono_contacto');
        $cita->dcalle = request('direccion_calle');
        $cita->dcolonia = request('direccion_colonia');
        $cita->dlocalidad = request('direccion_localidad');
        $cita->dmunicipio = request('direccion_municipio');      
        $cita->save();
        //return response()->json(['citas' => $cita]);
        if($tip_usu == 1){                        
            return redirect('admin/historial');
        }else if($tip_usu == 2){
            return redirect('usuario/historial');
        }else if($tip_usu == 3){
            return redirect('medico/historial');
        }
        else{
            return redirect()->route("login");
        }
    }
    public function historial(){
        $id_usuario = session('session_id');
        $tip_usu = session('session_tipo');
        $datos  =   CitasModel::select('citas.id_cita', 'citas.nombre_paciente', 'citas.fecha_cita', 'citas.apellido_paciente', 'citas.hora_cita', 'citas.estatus', 'citas.tipo_cita', 'usuarios.nombre', 'usuarios.app')
                    ->join('usuarios', 'citas.id_medico', '=', 'usuarios.id_usuario')
                    ->where('citas.id_usuario', '=', $id_usuario)
                    ->get();                    
        if($tip_usu == 1){            
            return view('admin.historial')->with(['datos' => $datos]);
        }else if($tip_usu == 2){
            return view('usuarios.historial')->with(['datos' => $datos]);
        }else if($tip_usu == 3){
            return view('medicos.historial')->with(['datos' => $datos]);
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function cancelar(Request $request, $id){
        $tip_usu = session('session_tipo');
        $cita = CitasModel::findOrFail($id);
        $cita->estatus = 'cancelada';
        $cita->update();
        if($tip_usu == 1){
            return redirect('admin/historial/');
        }else if($tip_usu == 2){
            return redirect('usuario/historial/');
        }else if($tip_usu == 3){
            return redirect('medico/historial/');
        }        
    }
    public function detallesc($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.detallesc', ['datos'=> CitasModel::findOrFail($id)]);
            //return response()->json(['datos'=> CitasModel::findOrFail($id)]);
        }else if($tip_usu == 2){
            return view('usuarios.detallesc', ['datos'=> CitasModel::findOrFail($id)]);
            //return response()->json(['datos'=> CitasModel::findOrFail($id)]);
        }else if($tip_usu == 3){
            return view('medicos.detallesc', ['datos'=> CitasModel::findOrFail($id)]);
            //return response()->json(['datos'=> CitasModel::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }
    }
    public function modificarc($id){
        $tip_usu = session('session_tipo');
        $datos = CitasModel::select('citas.id_cita','citas.nombre_paciente', 'citas.fecha_cita', 'citas.apellido_paciente', 'citas.costo_cita', 'citas.hora_cita', 'citas.telefono_contacto','citas.dcalle', 'citas.dcolonia', 'citas.dlocalidad', 'citas.dmunicipio',
                    'usuarios.nombre', 'usuarios.app', 'usuarios.pconsulta', 'usuarios.pconsulta_dom', 'usuarios.ccalle', 'usuarios.ccolonia', 'usuarios.clocalidad', 'usuarios.cmunicipio')
                    ->join('usuarios', 'citas.id_medico', '=', 'usuarios.id_usuario')
                    ->where('citas.id_cita', '=', $id)->get();
        if($tip_usu == 1){            
            return view('admin.modificarc')->with(['datos' => $datos]);
        }else if($tip_usu == 2){
            return view('usuarios.modificarc')->with(['datos' => $datos]);
        }else if($tip_usu == 3){
            return view('medicos.modificarc')->with(['datos' => $datos]);
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function updcita(Request $request, $id){
        $tip_usu = session('session_tipo');
        $cita = CitasModel::findOrFail($id);        
        $cita->nombre_paciente = request('nombre');
        $cita->apellido_paciente = request('apellidos');
        $cita->tipo_cita = request('tipo_cita');
        $cita->costo_cita = request('costo_cita');
        $cita->fecha_cita = request('fecha');
        $cita->hora_cita = request('hora');
        $cita->estatus = "pendiente";
        $cita->telefono_contacto = request('telefono_contacto');
        $cita->dcalle = request('direccion_calle');
        $cita->dcolonia = request('direccion_colonia');
        $cita->dlocalidad = request('direccion_localidad');
        $cita->dmunicipio = request('direccion_municipio');                
        $cita->update();
        //return response()->json(['citas' => $cita]);
        if($tip_usu == 1){
            return redirect('admin/historial');
        }else if($tip_usu == 2){
            return redirect('usuario/historial');
        }else if($tip_usu == 3){
            return redirect('medico/historial');
        }else{
            return redirect('login');
        }
    }
}
