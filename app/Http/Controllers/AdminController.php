<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuarios;
use App\EmergenciasModel;
use App\CitasModel;

class AdminController extends Controller
{    
    public function perfil(){        
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            $id_usuario = session('session_id');
            //dd($id_usuario);        
            $usu1 = Usuarios::find($id_usuario);
            if(is_null($usu1) ){ 
                abort(404); 
                //return "contenido 404";
                //return view("contenido.404");
            }
            return view("admin.perfil")->with(['usu1' => $usu1]);
        }
        else{
            return redirect()->route("login");
        }
    }    
    public function emergencias(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            $emergencias['emergencias'] = EmergenciasModel::all();
            return view("admin.emergencias", $emergencias);
        }
        else{
            return redirect()->route("login");
        }
    }
    public function doctores(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            $perfil  = 3;
            $doctor    = Usuarios::where('perfil', $perfil)->get();        
            return view('admin.doctores')->with(['doctor' => $doctor]);
            //return response()->json($doctores);
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function usuarios(){
        $usuarios['usuarios'] = Usuarios::all();
        return view('admin.usuarios', $usuarios);
    }
    public function registro(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.registro');
        }
        else{
            return redirect()->route("login");
        }     
    }public function former(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.formulario_emer');
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
        $usu->zona = "Lerma";
        $usu->email = request('email');
        $usu->password = request('password');
        $usu->perfil = request('perfil');
        $usu->cedulas = request('cedulas');
        $usu->especialidades = request('especialidades');
        $usu->precio_consulta = request('precio_consulta');
        $usu->precio_consulta_dom = request('precio_consulta_dom');
        if($request->hasFile('foto')){
            $file = $request->foto;
            $file->move(public_path(). '/img', $file->getClientOriginalName());
            $usu->foto = $file->getClientOriginalName();
        }
        $usu->save();
        //return response()->json(['usuarios' => $usu]);
        return redirect('admin/usuarios');
    }
    public function storemer(Request $request)
    {
        $emer = new EmergenciasModel;
        $emer->nombre_institucion = request('nombre');        
        $emer->telefono_institucion = request('telefono');
        $emer->zona_institucion = request('zona');
        $emer->save();
        //return response()->json(['emergencias' => $emer]);
        return redirect('admin/emergencias');
    }
      
    public function edite($id)
    {
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.modificaremer', ['edit'=> EmergenciasModel::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }          
    }
    public function editu($id)
    {
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            //return view('home', ['usuario'=> User::findOrFail($id)]);
            return view('admin.modificarusur', ['edit'=> Usuarios::findOrFail($id)]);
            //return response()->json(['edit' => Usuarios::findOrFail($id)]);   
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function updateme(Request $request, $id)
    {
        $emer = EmergenciasModel::findOrFail($id);
        $emer->nombre_institucion = request('nombre');        
        $emer->telefono_institucion = request('telefono');
        $emer->zona_institucion = request('zona');
        $emer->save();
        //return response()->json(['emergencias' => $emer]);
        return redirect('admin/emergencias');
    }
    public function updateusu(Request $request, $id){
        $usu = Usuarios::findOrFail($id);
        $usu->nombre = request('nombre');
        $usu->apellido_paterno = request('app');
        $usu->apellido_materno = request('apm');
        $usu->telefono = request('telefono');
        $usu->perfil = request('perfil');
        $usu->update();
        //return response()->json(['usuarios' => $usu]);
        return redirect('admin/usuarios');
    }
    public function updusu(Request $request, $id){
        $usu = Usuarios::findOrFail($id);
        $usu->nombre = request('name');
        $usu->apellido_paterno = request('app');
        $usu->apellido_materno = request('apm');
        $usu->telefono = request('telefono');
        $usu->update();
        //return response()->json(['usuarios' => $usu]);
        return redirect('admin/perfil');
    }
    public function destroyusu($id)
    {
        Usuarios::destroy($id);
        return redirect('admin/usuarios');
    }
    public function destroyemer($id)
    {
        EmergenciasModel::destroy($id);
        return redirect('admin/emergencias');
    }
    public function datosd($id)
    {
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.citas', ['datos'=> Usuarios::findOrFail($id)]);
        //return response()->json(['datos'=> Usuarios::findOrFail($id)]);
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
        $cita->telefono_contacto = request('telefono_contacto');
        $cita->direccion_calle = request('direccion_calle');
        $cita->direccion_colonia = request('direccion_colonia');
        $cita->direccion_localidad = request('direccion_localidad');
        $cita->direccion_municipio = request('direccion_municipio');
        $cita->direccion_estado = request('direccion_estado');
        $cita->save();
        //return response()->json(['citas' => $cita]);
        return redirect('admin/historial/'. $cita->id_usuario);
    }
    public function historial($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            $datos    = CitasModel::where('id_usuario', $id)->orderBy('tipo_cita')->get();
            return view('admin.historial')->with(['datos' => $datos]);
            //return response()->json(['datos' => $datos]);        
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function modificarc($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.modificarc', ['datos'=> CitasModel::findOrFail($id)]);
            //return response()->json(['datos'=> CitasModel::findOrFail($id)]);            
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function updcita(Request $request, $id){           
        $cita = CitasModel::findOrFail($id);
        $cita->nombre_paciente = request('nombre_paciente');
        $cita->apellido_paciente = request('apellidos_paciente');
        $cita->tipo_cita = request('tipo_cita');
        $cita->costo_cita = request('costo_cita');
        $cita->fecha_cita = request('fecha');
        $cita->hora_cita = request('hora');
        $cita->telefono_contacto = request('telefono_contacto');
        $cita->direccion_calle = request('direccion_calle');
        $cita->direccion_colonia = request('direccion_colonia');
        $cita->direccion_localidad = request('direccion_localidad');
        $cita->direccion_municipio = request('direccion_municipio');
        $cita->direccion_estado = "México";
        $cita->update();
        //return response()->json(['citas' => $cita]);
        return redirect('admin/historial/'. $cita->id_usuario);
    }
}
