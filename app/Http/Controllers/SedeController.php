<?php

namespace App\Http\Controllers;

use App\Models\sede;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sede=sede::all();
        return view('sedes.index', ['sed'=>$sede]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cod = route('guardar_sede');
        $titulo = 'Creacion sede';
        return view('sedes.create',['cod'=>$cod,'titulo'=>$titulo]);
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
            'nombre_sede' => 'required | alpha| unique:sedes',
            'direccion' => 'required | unique:sedes'
        ],
        [
          'nombre_sede.required' =>'El campo no puede estar vacio', 
          'nombre_sede.unique' =>'Esta sede ya existe',
          'nombre_sede.alpha' =>'Utilice caracteres alfabeticos' ,
          'direccion.required' =>'El campo no puede estar vacio', 
          'direccion.unique' =>'Esta direccion ya existe'
          ]

        );

        $s=new sede();
        $s->nombre_sede=$request->nombre_sede;
        $s->direccion=$request->direccion;

        //return $s;
        $s->save();
        return redirect()->route('mostrar_sedes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show(sede $sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $informacion = sede::where('id','=',$id)->get();
        $cod = route('actualizar_sede');
        $titulo = 'Edicion sede';
        return view('sedes.create',['cod'=>$cod,'titulo'=>$titulo,'informacion'=>$informacion]);
    }

    /**
     * Update the specified resource in storage.
     *0
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sede = sede::find($request->id);
        $sede->nombre_sede=$request->nombre_sede;
        $sede->direccion=$request->direccion;
        $sede->save();
        return redirect()->route('mostrar_sedes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($s)
    {
        
        // sede::where('id',$request->id)->delete();
    
    //    return $s;
         DB::delete('DELETE FROM sedes WHERE id= ?' ,[$s]);
         return redirect()->route('mostrar_sedes');
    
    }

    public function mostrarSedes(){
        $lista = sede::orderby('id','asc')->get();
        return $lista;
    }
}
