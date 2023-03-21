<?php

namespace App\Http\Controllers;

use App\Models\instructor;
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
    public function update(Request $request)
    {
        $a=instructor::where('lider','=',true)->get('id');
        
        
        if(empty($a) == false){
            instructor::where('id', '=' ,$a[0]->id)->update(['lider'=>false]);
        }
        instructor::where('id', '=' ,$request->lider)->update(['lider'=>true]);
        
       
        return redirect()->route('mostrar_redtematica');
 
        
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
