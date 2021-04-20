<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuarios;
use App\EmergenciasModel;
use App\DoctoresModel;
use App\CitasModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CitasExport;

class MedicosController extends Controller
{
    public function exportExcel(){
        return Excel::download(new CitasExport, 'citas-list.xlsx');
    }
    public function perfil(){        
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){
            $id_usuario = session('session_id');
            //dd($id_usuario);        
            $perfil = Usuarios::find($id_usuario);            
            return view("medicos.perfil")->with(['perfil' => $perfil]);
        }
        else{
            return redirect()->route("login");
        }
    }
    public function docs(){  
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){
            $perfil  = 3;
            $doctor    = Usuarios::where('perfil', $perfil)->get();
            return view('medicos.doctores')->with(['doctor' => $doctor]);
            //return response()->json($doctor);
        }
        else{
            return redirect()->route("login");
        }                              
    }
    public function editmed($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){
            return view('medicos.modificar', ['datos'=> Usuarios::findOrFail($id)]);            
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function updmed(Request $request, $id){
        $usu = Usuarios::findOrFail($id);
        $usu->nombre = request('name');
        $usu->app = request('app');
        $usu->apm = request('apm');
        $usu->telefono = request('telefono');
        $usu->municipio = request('zona');     
        $usu->update();
        //return response()->json(['usuarios' => $usu]);
        return redirect('medico/perfil');
    }
    public function emer(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){
            $emergencias = EmergenciasModel::all();
        //return response()->json(['emergencias', $emer]);
        return view('medicos.emergencias')->with(['emergencias' => $emergencias ]);
        }
        else{
            return redirect()->route("login");
        }          
    }
    public function datosd($id)
    {
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){
            return view('medicos.citas', ['datos'=> Usuarios::findOrFail($id)]);
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
        $cita->dmunicipio = request('direccion_municipio');;    
        $cita->save();
        //return response()->json(['citas' => $cita]);
        return redirect('medico/historial/'. $cita->id_usuario);
    }
    public function historial($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){
            $datos    = CitasModel::select('citas.id_cita', 'citas.nombre_paciente', 'citas.fecha_cita', 'citas.apellido_paciente',
                            'citas.hora_cita', 'citas.estatus', 'citas.tipo_cita','usuarios.nombre', 'usuarios.app')
                        ->join('usuarios', 'citas.id_medico', '=', 'usuarios.id_usuario')->where('citas.id_usuario', '=', $id)->get();
            return view('medicos.historial')->with(['datos' => $datos]);
            //return response()->json(['datos' => $datos]);        
        }
        else{
            return redirect()->route("login");
        }         
    }
    public function modificarc($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){
            $datos = CitasModel::select('citas.id_cita','citas.nombre_paciente', 'citas.fecha_cita', 'citas.apellido_paciente', 'citas.costo_cita',
                'citas.hora_cita', 'citas.telefono_contacto','citas.dcalle', 'citas.dcolonia', 'citas.dlocalidad', 'citas.dmunicipio',
                'usuarios.nombre', 'usuarios.app', 'usuarios.pconsulta', 'usuarios.pconsulta_dom', 'usuarios.ccalle', 'usuarios.ccolonia', 'usuarios.clocalidad', 'usuarios.cmunicipio')
                ->join('usuarios', 'citas.id_medico', '=', 'usuarios.id_usuario')->where('citas.id_cita', '=', $id)->get();
            return view('medicos.modificarc')->with(['datos' => $datos]);
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function updcita(Request $request, $id){        
        $cita = CitasModel::findOrFail($id);
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
        $cita->update();
        //return response()->json(['citas' => $cita]);
        return redirect('medico/historial/'. $cita->id_usuario);;
    }
    public function detallesc($id){
        $tip_usu = session('session_tipo');
        if($tip_usu == 3){
            return view('medicos.detallesc', ['datos'=> CitasModel::findOrFail($id)]);
            //return response()->json(['datos'=> CitasModel::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }
    }
    public function cancelar(Request $request, $id){
        $tip_usu = session('session_tipo');
        if($tip_usu == 3){
            $cita = CitasModel::findOrFail($id);
            $cita->estatus = 'cancelada';
            $cita->update();
            return redirect('medico/historial/'.$tip_usu);
        }else{
            return redirect()->route("login");
        }
    }
    public function agenda(){
        $tip_usu = session('session_tipo');
        $id_medico = session('session_id');
        $fecha = now()->toDateString('Y-m-d');
        if($tip_usu == 3){
            $datos    = CitasModel::where('id_medico', '=', $id_medico)
                                    ->where('fecha_cita', $fecha)
                                    ->where('estatus', '=', 'pendiente')->get();
            return view('medicos.agenda')->with(['datos' => $datos]);
            //return response()->json($datos);
        }
        else{
            return redirect()->route("login");
        }
        //return response()->json($fecha);
    }
    public function pacientes($id){
        $tip_usu = session('session_tipo');
        $id_medico = session('session_id');
        if($tip_usu == 3){            
            $datos = CitasModel::where('estatus', '=', 'atentida')
                                ->where('id_medico', $id_medico)
                                ->orderBy('id_usuario')->get();                                                                
            //return response()->json($datos);
            return view('medicos.pacientes')->with(['datos' => $datos]);
        }
        else{
            return redirect()->route("login");
        }          
    }
    public function cita($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 3){            
            return view('medicos.cita', ['datos'=> CitasModel::findOrFail($id)]);            
            //return response()->json($datos);            
        }
        else{
            return redirect()->route("login");
        } 
    }
    public function actpac(Request $request, $id){
        $cita = CitasModel::findOrFail($id);        
        $cita->estatus = "atentida";
        $cita->observaciones = request('observaciones');
        $cita->medicamentos = request('medicamentos');
        $cita->update();
        //return response()->json($cita);
        return redirect('medico/agenda');
    }
}
