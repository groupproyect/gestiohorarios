<?php

namespace App\Http\Controllers;

use App\Models\ficha;

use App\Http\Controllers\ProgramaFormacionController as ProgramaFormacionController;
use App\Http\Controllers\JornadaController as JornadaController;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fic= ficha::orderby('num_ficha','desc')->get();
        return view('ficha.index',['info'=>$fic]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programa = new ProgramaFormacionController();
        $list_programa = $programa->mostrarp();

        $jornada = new  JornadaController;
        $list_jornada = $jornada->mostrarj();

        $cod = route('guardar_ficha');
        $titulo = "Creacion Ficha";


        return view('ficha.createficha',['programa'=>$list_programa,'jornada'=>$list_jornada,'cod'=>$cod,'titulo'=>$titulo]);
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
            'num_ficha' => 'required | numeric| unique:fichas',
            'codigo_prog' => 'required',
            'cant_aprend' => 'required | numeric',
            'cadena_formacion' => 'required',
            'trimestre'=> 'required',
            'inicio_formacion' => 'required',
            'fin_formacion' => 'required',
            'id_jornada' => 'required',
            'estado' => 'required',

        ],
        [
          'num_ficha.required' =>'El campo no puede estar vacio', 
          'num_ficha.unique' =>'Este ambiente ya existe',
          'num_ficha.numeric' =>'Utilice caracteres numericos' ,
          'codigo_prog.required' =>'Seleccione una opción', 
          'cant_aprend.required' =>'El campo no puede estar vacio', 
          'cant_aprend.numeric' =>'Utilice caracteres numericos',
          'cadena_formacion.required' =>'Seleccione una opción',
          'trimestre.required' =>'Seleccione una opción',
          'inicio_formacion.required' =>'Seleccione una opción',
          'fin_formacion.required' =>'Seleccione una opción',
          'id_jornada.required' =>'Seleccione una opción',
          'estado.required' =>'Seleccione una opción',
          
          ]

        );
        $nuevo2=new ficha();
        $nuevo2->num_ficha=$request->num_ficha;
        $nuevo2->codigo_prog=$request->codigo_prog;
        $nuevo2->cant_aprend=$request->cant_aprend;
        $nuevo2->cadena_formacion=$request->cadena_formacion;
        $nuevo2->trimestre=$request->trimestre;
        $nuevo2->inicio_formacion=$request->inicio_formacion;
        $nuevo2->fin_formacion=$request->fin_formacion;
        $nuevo2->id_jornada=$request->id_jornada;
        $nuevo2->estado=$request->estado;
        $nuevo2->save();
        return redirect()->route('mostrar_fichas'); //retorna a una vista esfecificada
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit(ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ficha $ficha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy(ficha $ficha)
    {
        //
    }
}
