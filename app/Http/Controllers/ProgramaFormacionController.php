<?php

namespace App\Http\Controllers;

use App\Models\programa_formacion;
use App\Http\Controllers\AreaController as AreaController;
use App\Http\Controllers\NivelFormacionController as NivelFormacionController;
use App\Models\ficha;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProgramaFormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivel= programa_formacion::orderby('codigo_prog','desc')->get();
        return view('programaformacion.index',['tat'=>$nivel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $nivelf= new NivelFormacionController;
        $list_nivel = $nivelf->mostrarNivelFormacion();

        $area = new AreaController;
        $list_areas = $area->mostrarAreas();

        $cod = route('guardar_programaformacion');
        $titulo = "Creacion programa de formación ";
        return view('programaformacion.create',['nivelformacion'=>$list_nivel,'areas'=>$list_areas,'cod'=>$cod,'titulo'=>$titulo]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'codigo_prog' => 'required | numeric| unique:programa_formacions',
            'nombre' => 'required | alpha | unique:programa_formacions',
            'version' => 'required | numeric',
            'duracion' => 'required',
            'id_area' => 'required',
            'id_niv_formacion' => 'required ',
    

        ],
        [
          'codigo_prog.required' =>'El campo no puede estar vacio', 
          'codigo_prog.unique' =>'Este programa ya existe',
          'codigo_prog.numeric' =>'Utilice caracteres numericos' ,
          'nombre.required' =>'Seleccione una opción', 
          'nombre.unique' =>'Este programa ya existe',
          'nombre.alpha' =>'Utilice caracteres alfabeticos' ,
          'version.required' =>'El campo no puede estar vacio', 
          'version.numeric' =>'Utilice caracteres numericos',
          'duracion.required' =>'El campo no puede estar vacio', 
          'id_area.required' =>'Seleccione una opción',
          'id_niv_formacion.required' =>'Seleccione una opción'
          ]

        );
        $nuevo6=new programa_formacion();
        $nuevo6->codigo_prog=$request->codigo_prog;
        $nuevo6->nombre=$request->nombre;
        $nuevo6->version=$request->version;
        $nuevo6->duracion=$request->duracion;
        $nuevo6->id_area=$request->id_area;
        $nuevo6->id_niv_formacion=$request->id_niv_formacion;
        $nuevo6->save();
        return redirect()->route('mostrar_programaformacion'); //retorna a una vista esfecificada
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\programa_formacion  $programa_formacion
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\programa_formacion  $programa_formacion
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $info= programa_formacion::where('codigo_prog','=',$id)->get();
        $nivelf = new NivelFormacionController;
        $list_nivel = $nivelf->mostrarNivelFormacion();

        $area = new AreaController;
        $list_areas = $area->mostrarAreas();

        $cod = route('actualizar_programaformacion');
        $titulo = "Editar Programa de Formación";

        return view('programaformacion.create',['nivelformacion'=>$list_nivel,'areas'=>$list_areas,'cod'=>$cod,'titulo'=>$titulo,'informacion'=>$info]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\programa_formacion  $programa_formacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        programa_formacion::where('codigo_prog','=',$request->codigo_prog)->update(['nombre' => $request->nombre,'version' => $request->version,'duracion' => $request->duracion,'id_area'=> $request->id_area,'id_niv_formacion'=> $request->id_niv_formacion,'codigo_prog'=> $request->codigo_prog]);
        return redirect()->route('mostrar_programaformacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\programa_formacion  $programa_formacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($e)
    {
        DB::delete('DELETE FROM  programa_formacions WHERE codigo_prog= ?' ,[$e]);
        return redirect()->route('mostrar_programaformacion');
    }

    public function mostrarp(){
        $lista = programa_formacion::orderby('codigo_prog','asc')->get();
        return $lista;
        
    }
}
