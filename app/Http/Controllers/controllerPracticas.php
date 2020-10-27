<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Alumno;
Use App\Practica;
Use App\Materias;
//Mandamos a llamar a nuestro modelo
Use App\Http\Requests\Practica as PracticaRequests;
//mandamos a llamar al request Practica 
class controllerPracticas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    protected $datos;
    public function _construct (Practica $datos){
        $this->practica = $datos;
    } 
    public function list(){
        $datos['practicas']=Practica::paginate(5);
        return view("crud.lista", $datos);

    }     
    public function index()
    {
        
        $datos=Practica::all();
        return response()->json([$datos]);
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
    public function store(PracticaRequests $request){        
        
        //$usuarios = $this->practica->create($request->all());
        //return reponse()->json($usuarios);
        //$usuarios = request()->except('_token');
        //Practica::insert($usuarios);
        //return response()->json($usuarios);
        $usuarios = new Practica;
        $usuarios->nombre = request('nombre');
        $usuarios->apellido = request('apellido');
        $usuarios->edad = request('edad');
        $usuarios->correo = request('correo');
        $usuarios->save();
        return redirect('practica/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datos = Alumno::find($id);
        return $datos;
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
        Practica::destroy($id);
        return 'El registro fue eliminado';
    }
}
