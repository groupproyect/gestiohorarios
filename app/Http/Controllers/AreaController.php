<?php

namespace App\Http\Controllers;

use App\Models\area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
      $a2=area::orderby('id')->get();
        return view('area.ficha_area',['muare'=>$a2]);
       // return view ('area.ficha_area');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$cod = "'guardar'";
        //return $cod;
        $cod = route('guardar_area');
        $titulo = 'Creacion Area';
        return view('area.createare',['cod'=>$cod,'titulo'=>$titulo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $area=new area();
        $area->id=$request->id;
        $area->descripcion=$request->descripcion;
        $area->save();

        return redirect()->route('mostrar_areas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $informacion = area::where('id','=',$id)->get();
        $cod = route('actualizar_area');
        $titulo = 'Edicion area';
        return view('area.createare',['cod'=>$cod,'titulo'=>$titulo,'informacion'=>$informacion]);
        //return $informacion;
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $area = area::find($request->id);
        $area->descripcion=$request->descripcion;
        $area->save();
        
        return redirect()->route('mostrar_areas');
        //return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($re)
    {
        
        // sede::where('id',$request->id)->delete();
    
    //    return $s;
         DB::delete('DELETE FROM areas WHERE id= ?' ,[$re]);
         return redirect()->route('mostrar_areas');
    
    }
    public function mostrarAreas(){
        $lista = area::orderby('id','asc')->get();
        return $lista;
        
    }
}
