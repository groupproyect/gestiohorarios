<?php

namespace App\Http\Controllers;

use  App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function indexini()
    {
      /* $user=user::all();
        return view('inicio.inicio', ['use'=>$user]);*/
    }
    public function create()
    {
        $cod = route('iniciosesion_cre');
        $titulo = 'Inicio sesion';
        return view('inicio.inicio',['cod'=>$cod,'titulo'=>$titulo]);
    }
    public function store(Request $request){

    $request->validate([
        'name' => 'required | alpha| unique:user',
        'email' => 'required | alpha| unique:user',
        'password' => 'required | alpha| unique:user',
      
    ],
    [
      'name.required' =>'El campo no puede estar vacio', 
      'name.unique' =>'Esta red tematica ya existe',
      'name.alpha' =>'Utilice caracteres alfabeticos' ,
      'email.required' =>'El campo no puede estar vacio', 
      'password.required' =>'El campo no puede estar vacio', 
     
      ]

    );

    $ini=new user();
    $ini->name=$request->name;
    $ini->email=$request->email;
    $ini->password=$request->password;
    $ini->save();
    return redirect()->route('horario');
    }
}
