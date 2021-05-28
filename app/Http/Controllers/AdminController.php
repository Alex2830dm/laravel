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
use Barryvdh\DomPDF\Facade as PDF;

class AdminController extends Controller
{    

    public function editusu($id){
        return view('admin.modificar', ['edit'=> Usuarios::findOrFail($id)]);
    }

    public function exportExcel() {
        return Excel::download(new UsersExport, 'user-list.xlsx');                
    }
    public function importExcel(Request $request) {
        $file = $request->file('file');
        Excel::import(new UsersImport, $file);
        return redirect('admin/usuarios');
    }
    public function exportPDF() {
        $users = Usuarios::all();
        $pdf = PDF::loadView('admin.PDF', compact('users'));

        return $pdf->download('user-list-pdf.pdf');
    }
    
    public function usuarios(Request $request){
        if($request){
            $query = trim($request->get('buscar'));
            $users = Usuarios::where('nombre', 'LIKE', '%' . $query . '%')
                    ->orderBy('id_usuario', 'asc')
                    ->get();
            return view('admin.usuarios', ['usuarios' => $users, 'buscar' => $query]);
        }

        //return view('admin.usuarios')->with('usuarios', $usuarios);

    }
    public function registro(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.registro');
        }
        else{
            return redirect()->route("login");
        }
    }
    public function former(){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.formulario_emer');
        }
        else{
            return redirect()->route("login");
        }     
    }
    public function storeusu(Request $request){
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
    public function storemer(Request $request){
        $emer = new EmergenciasModel;
        $emer->nombre_institucion = request('nombre');        
        $emer->telefono_institucion = request('telefono');
        $emer->zona_institucion = request('zona');
        $emer->save();
        //return response()->json(['emergencias' => $emer]);
        return redirect('admin/emergencias');
    }
      
    public function edite($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){
            return view('admin.modificaremer', ['edit'=> EmergenciasModel::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }          
    }
    public function editu($id){
        $tip_usu = session('session_tipo');        
        if($tip_usu == 1){            
            return view('admin.modificarusur', ['edit'=> Usuarios::findOrFail($id)]);
        }
        else{
            return redirect()->route("login");
        }        
    }
    public function updateme(Request $request, $id){
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
    public function destroyusu($id){
        Usuarios::destroy($id);
        return redirect('admin/usuarios');
    }
    public function destroyemer($id){
        EmergenciasModel::destroy($id);
        return redirect('admin/emergencias');
    }    
}
