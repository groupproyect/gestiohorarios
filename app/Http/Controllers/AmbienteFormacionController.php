<?php

namespace App\Http\Controllers;

use App\Models\ambiente_formacion;


use App\Http\Controllers\SedeController as SedeController;
use App\Http\Controllers\AreaController as AreaController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class AmbienteFormacionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexa()
    {
        $am= ambiente_formacion::orderby('id_ambiente','desc')->get();
    return view('ambiente.indexa',['info'=>$am]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createa()
    {
        $sede = new SedeController;
        $list_sedes = $sede->mostrarSedes();

        $area = new AreaController;
        $list_areas = $area->mostrarAreas();

        $cod = route('guardar_ambiente');
        $titulo = "creacion ambiente";


        return view('ambiente.createa',['sedes'=>$list_sedes,'areas'=>$list_areas,'cod'=>$cod,'titulo'=>$titulo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo2=new ambiente_formacion();
        $nuevo2->id_ambiente=$request->id_ambiente;
        $nuevo2->id_area=$request->id_area;
        $nuevo2->aforo=$request->aforo;
        $nuevo2->id_sede=$request->id_sede;
        $nuevo2->save();
        return redirect()->route('mostrar_ambientes'); //retorna a una vista esfecificada
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ambiente_formacion  $ambiente_formacion
     * @return \Illuminate\Http\Response
     */
    public function show(ambiente_formacion $ambiente_formacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ambiente_formacion  $ambiente_formacion
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $informacion = ambiente_formacion::where('id_ambiente','=',$id)->get();
        $sede = new SedeController;
        $list_sedes = $sede->mostrarSedes();

        $area = new AreaController;
        $list_areas = $area->mostrarAreas();

        $cod = route('actualizar_ambiente');
        $titulo = "Editar ambiente";

        return view('ambiente.createa',['sedes'=>$list_sedes,'areas'=>$list_areas,'cod'=>$cod,'titulo'=>$titulo,'informacion'=>$informacion]);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ambiente_formacion  $ambiente_formacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $nuevo2 = ambiente_formacion::find($request->id_ambiente);
        // $nuevo2->id_ambiente=$request->id;
        // $nuevo2->id_area=$request->id_area;
        // $nuevo2->aforo=$request->aforo;
        // $nuevo2->id_sede=$request->id_sede;
        // $nuevo2->save();

        ambiente_formacion::where('id_ambiente','=',$request->id_ambiente)->update(['aforo' => $request->aforo,'id_sede'=> $request->id_sede,'id_ambiente'=> $request->id]);
        return redirect()->route('mostrar_ambientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ambiente_formacion  $ambiente_formacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($e)
    {
        
        // sede::where('id',$request->id)->delete();
    
    //    return $s;
         DB::delete('DELETE FROM ambiente_formacions WHERE id_ambiente= ?' ,[$e]);
         return redirect()->route('mostrar_ambientes');
    
    }
}
