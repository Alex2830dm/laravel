<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Doctores;
class controllerDoctores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list(){
        $datos['doctores']=Doctores::paginate(5);
        return view("doctores.lista", $datos);

    }  
    public function index()
    {
        return view('doctores.formulario');
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
        $doctores = new Doctores;
        $doctores->nombre = request('nombre');
        $doctores->apellido = request('apellido');        
        $doctores->correo = request('correo');
        $doctores->cedula = request('cedula');
        $doctores->telefono = request('telefono');
        $doctores->save();
        return redirect('proyecto/doctores/lista');
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
        //
    }
}
