<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuarios;
use App\EmergenciasModel;
use App\CitasModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;

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

    public function editusu($id){
        return view('admin.modificar', ['edit'=> Usuarios::findOrFail($id)]);
    }

    public function exportExcel(){
        return Excel::download(new UsersExport, 'user-list.xlsx');
    }
    public function importExcel(Request $request){
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);
        return redirect('admin/usuarios');
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
        $usuarios = DB::table('usuarios')->get();
        return view('admin.usuarios')->with('usuarios', $usuarios);
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
        $usu->app = request('app');
        $usu->apm = request('apm');
        $usu->telefono = request('telefono');
        $usu->municipio = "Lerma";
        $usu->email = request('email');
        $usu->password = request('password');
        $usu->perfil = request('perfil');
        $usu->cedulas = request('cedulas');
        $usu->especialidades = request('especialidades');
        $usu->pconsulta = request('precio_consulta');
        $usu->pconsulta_dom = request('precio_consulta_dom');
        $usu->ccalle = request('consultorio_calle');
        $usu->ccolonia = request('consultorio_colonia');
        $usu->clocalidad = request('consultorio_localidad');
        $usu->cmunicipio = request('consultorio_municipio');
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
            return view('admin.modificarusur', ['edit'=> Usuarios::findOrFail($id)]);
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
        $usu->app = request('app');
        $usu->apm = request('apm');
        $usu->telefono = request('telefono');
        $usu->perfil = request('perfil');
        $usu->update();
        //return response()->json(['usuarios' => $usu]);
        return redirect('admin/usuarios');
    }
    public function updusu(Request $request, $id){
        $usu = Usuarios::findOrFail($id);
        $usu->nombre = request('name');
        $usu->app = request('app');
        $usu->apm = request('apm');
        $usu->telefono = request('telefono');
        $usu->municipio = request('zona');
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
        return redirect('admin/historial/'. $cita->id_usuario);
    }
    public function historial($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            $datos    = CitasModel::select('citas.id_cita', 'citas.nombre_paciente', 'citas.fecha_cita', 'citas.apellido_paciente',
                            'citas.hora_cita', 'citas.estatus', 'citas.tipo_cita','usuarios.nombre', 'usuarios.app')
                        ->join('usuarios', 'citas.id_medico', '=', 'usuarios.id_usuario')->where('citas.id_usuario', '=', $id)->get();
            return view('admin.historial')->with(['datos' => $datos]);
            //return response()->json(['datos' => $datos]);        
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function modificarc($id){
        
        if($tip_usu == 1){            
            $datos = CitasModel::select('citas.id_cita','citas.nombre_paciente', 'citas.fecha_cita', 'citas.apellido_paciente', 'citas.costo_cita',
                'citas.hora_cita', 'citas.telefono_contacto','citas.dcalle', 'citas.dcolonia', 'citas.dlocalidad', 'citas.dmunicipio',
                'usuarios.nombre', 'usuarios.app', 'usuarios.pconsulta', 'usuarios.pconsulta_dom', 'usuarios.ccalle', 'usuarios.ccolonia', 'usuarios.clocalidad', 'usuarios.cmunicipio')
                ->join('usuarios', 'citas.id_medico', '=', 'usuarios.id_usuario')->where('citas.id_cita', '=', $id)->get();
            return view('admin.modificarc')->with(['datos' => $datos]);
            //return response()->json(['datos'=> CitasModel::findOrFail($id)]);            
        }
        else{
            return redirect()->route("login");
        }
    }
    public function detallesc($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.detallesc', ['datos'=> CitasModel::findOrFail($id)]);
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
        $cita->estatus = "pendiente";
        $cita->telefono_contacto = request('telefono_contacto');
        $cita->dcalle = request('direccion_calle');
        $cita->dcolonia = request('direccion_colonia');
        $cita->dlocalidad = request('direccion_localidad');
        $cita->dmunicipio = request('direccion_municipio');        
        $cita->update();
        //return response()->json(['citas' => $cita]);
        return redirect('admin/historial/'. $cita->id_usuario);
    }
    public function cancelar(Request $request, $id){
        $cita = CitasModel::findOrFail($id);
        $cita->estatus = 'cancelada';
        $cita->update();
        return redirect('admin/historial/1');
    }
}
