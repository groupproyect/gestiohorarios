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
        $cod = route('guardar_iniciosesion');
        $titulo = 'Inicio sesion';
        return view ('Inicio.Inicio',['cod'=>$cod,'titulo'=>$titulo]);
    }
    public function store(Request $request){

    $request->validate([
        'name' => 'required | alpha| unique:users',
        'email' => 'required:users',
        'password' => 'required:users',
      
    ],
    [
      'name.required' =>'El campo no puede estar vacio', 
      'name.unique' =>'Esta nombre ya existe',
      'name.alpha' =>'Utilice caracteres alfabeticos' ,
      'email.required' =>'El campo no puede estar vacio', 
      'password.required' =>'El campo no puede estar vacio', 
     
      ]

    );

    $ini=new User();
    $ini->name=$request->name;
    $ini->email=$request->email;
    $ini->password=$request->password;
    $ini->save();
    // return redirect()->route('horario');
    return $request;
    }
}
