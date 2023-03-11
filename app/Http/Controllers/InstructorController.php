<?php

namespace App\Http\Controllers;

use App\Models\instructor;
use App\Http\Controllers\AreaController as AreaController;
use App\Http\Controllers\TipoContratoController as tipoContrato;
use Illuminate\Http\Request;

class InstructorController extends Controller
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
        //
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
    public function edit(instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(instructor $instructor)
    {
        //
    }
}
