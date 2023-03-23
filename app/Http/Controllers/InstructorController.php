<?php

namespace App\Http\Controllers;

use App\Models\instructor;
use App\Http\Controllers\AreaController as AreaController;
use App\Http\Controllers\TipoContratoController as tipoContrato;
use App\Http\Controllers\PersonaController as Persona;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar_instructor()
    {
        $a2=DB::select('select personas.nombres, instructors.id from personas,instructors WHERE personas.num_doc=instructors.num_doc;');
       
        return view('redtematica.indexr',['a2'=>$a2]);
        //return $a2;
        
    }

    public function mostrar()
    {
        $ins=instructor::all();
        return view('instructor.tablainstru', ['use'=>$ins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $area = new AreaController;
        $list_areas = $area->mostrarAreas();

        $contrato = new tipoContrato;
        $list_contrats = $contrato->mostrarContratos();

        $cod = route('guardar_instructor');
        $titulo = "Creacion Instructor";

        return view('instructor.registroinstru',['areas'=>$list_areas, 'contratos'=>$list_contrats,'titulo'=>$titulo, 'cod'=>$cod]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->store($request);
        $prueba = $persona->mostrar_person($request->num_doc);
        if(!empty($prueba)){
            $contrato = new tipoContrato();
            $instructor = new instructor();
            $instructor->num_doc = $request->num_doc;
            $instructor->lider = false;
            $instructor->id_area = $request->id_contrato;
            $instructor->finalizacion_contrato = $request->finalizacion_contrato;
            $instructor->id_contrato = $request->id_contrato;
            $instructor->cant_momentos = $contrato->contrato($request->id_contrato);
            return "bieeeeeen";
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(instructor $instructor)    {
        $area = new AreaController;
        $list_areas = $area->mostrarAreas();

        $contrato = new tipoContrato;
        $list_contrats = $contrato->mostrarContratos();

        $cod = route('guardar_instructor');
        $titulo = "Creacion Instructor";
        return view('instructor.registroinstru',['areas'=>$list_areas, 'contratos'=>$list_contrats,'titulo'=>$titulo, 'cod'=>$cod]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $contrato = new tipoContrato();
        $instructor = new instructor();
        $instructor->num_doc = $request->num_doc;
        $instructor->lider = false;
        $instructor->id_area = $request->id_contrato;
        $instructor->finalizacion_contrato = $request->finalizacion_contrato;
        $instructor->id_contrato = $request->id_contrato;
        $instructor->cant_momentos = $contrato->contrato($request->id_contrato);
        return "bieeeeeen";
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy($instructor)
    {
        DB::delete('DELETE FROM persona WHERE num_doc= ?' ,[$instructor]);
        return redirect()->route('mostrar_instructor');
    }

} 

