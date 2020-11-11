<?php

namespace App\Http\Controllers;

use App\materias;
use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function list(){
        $datos['practicas']=materias::paginate(5);
        return view("crud.materias", $datos);
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
        $materias = new materias;
        $materias->nombre = request('nombre');
        $materias->save();
        //return redirect('practica/materias');
        return response()->json($materias);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function show(materias $materias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function edit(materias $materias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materias $materias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\materias  $materias
     * @return \Illuminate\Http\Response
     */
    public function destroy(materias $materias)
    {
        //
    }
}
