<?php

namespace App\Http\Controllers;

use App\Models\red_tematica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InstructorController as C_instructor;

class RedTematicaController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $rt=red_tematica::all();
        $a=new C_instructor;
        $a2=$a->mostrar_instructor();
        $a3=DB::select('select personas.nombres, instructors.id from personas,instructors WHERE personas.num_doc=instructors.num_doc AND instructors.lider=true;');
        if(empty($a3) == true){
            $a3[0] = false;
            $a3[1] = false;
        }
        //return view('redtematica.indexr', ['rtm'=>$rt , 'a2'=>$a2, 'a3'=>$a3[0]]);
        return $a3;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cod = route('guardar_redtematica');
        $titulo = 'Creacion red tematica';
        return view('redtematica.creater',['cod'=>$cod,'titulo'=>$titulo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //VALIDACION 

    $request->validate([
        'descripcion' => 'required | alpha| unique:red_tematicas',
      
    ],
    [
      'descripcion.required' =>'El campo no puede estar vacio', 
      'descripcion.unique' =>'Esta red tematica ya existe',
      'descripcion.alpha' =>'Utilice caracteres alfabeticos' ,
     
      ]

    );

    $r=new red_tematica();
    $r->descripcion=$request->descripcion;
    $r->save();
    return redirect()->route('mostrar_redtematica');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\red_tematica  $red_tematica
     * @return \Illuminate\Http\Response
     */
    public function show(red_tematica $red_tematica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\red_tematica  $red_tematica
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $informacion = red_tematica::where('id','=',$id)->get();
        $cod = route('actualizar_redtematica');
        $titulo = 'Edicion Red Tematica';
        return view('redtematica.creater',['cod'=>$cod,'titulo'=>$titulo,'informacion'=>$informacion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\red_tematica  $red_tematica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $r = red_tematica::find($request->id);
        $r->descripcion=$request->descripcion;

        $r->save();
        return redirect()->route('mostrar_redtematica');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\red_tematica  $red_tematica
     * @return \Illuminate\Http\Response
     */
    public function destroy($r)
    {
        DB::delete('DELETE FROM  red_tematicas WHERE id= ?' ,[$r]);
        return redirect()->route('mostrar_redtematica');
    }
    public function mostrarRedtematica(){
        $lista = red_tematica::orderby('id','asc')->get();
        return $lista;
    }
}

