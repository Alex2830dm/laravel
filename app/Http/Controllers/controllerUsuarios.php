<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Usuarios;
use App\Http\Requests\Usuarios as UsuariosRequests;

class controllerUsuarios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $usuarios;
    public function _construct (Usuarios $usuarios){
        $this->usuarios = $usuarios;
    }
    public function list(){
        $datos['usuarios']=Usuarios::paginate(5);
        return view("usuarios.lista", $datos);

    }     
    public function index()
    {
        //$datos['practica']=Practica::paginate(5);
        //return view("crud.index", $datos);
        return view('usuarios.formulario');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        //$datos = request()->all();
        //$usuarios = $this->usuarios->create($request->all());
        //return response()->json($usuarios);
        //$usuarios = request()->except('_token');
        //Usuarios::insert($usuarios);
        //return response()->json($usuarios);
        $usuarios = new Usuarios;
        $usuarios->nombre = request('nombre');
        $usuarios->apellido = request('apellido');        
        $usuarios->correo = request('correo');
        $usuarios->password = request('password');
        $usuarios->telefono = request('telefono');
        $usuarios->save();
        return redirect('proyecto/usuarios/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuarios::destroy($id);
        return redirect('proyecto/usuarios/lista');
    }
}
