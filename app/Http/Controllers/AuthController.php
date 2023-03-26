<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class AuthController extends Controller
{
    /**
    * Función que muestra la vista de logados o la vista con el formulario de Login
    */
<<<<<<< HEAD
<<<<<<< HEAD
=======

    
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======

>>>>>>> ivank
    public function indexusu()
    {
        // Comprobamos si el usuario ya está logado
        if (Auth::check()) {
    
            // Si está logado le mostramos la vista de logados
            return view('logados');
        }
    
        // Si no está logado le mostramos la vista con el formulario de login
    
        return view('inicio.loginusuario');
    }
    
    /**
    * Función que se encarga de recibir los datos del formulario de login, comprobar que el usuario existe y
    * en caso correcto logar al usuario
    */
    public function loginusu(Request $request)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        // Comprobamos que el email y la contraseña han sido introducidos
=======
        // Comprobamos que el nombre,email y la contraseña han sido introducidos
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
        // Comprobamos que el nombre,email y la contraseña han sido introducidos
>>>>>>> ivank
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    
<<<<<<< HEAD
<<<<<<< HEAD
        // Almacenamos las credenciales de nombre, email y contraseña
=======
        // Almacenamos las credenciales de email y contraseña
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
        // Almacenamos las credenciales de email y contraseña
>>>>>>> ivank
        $credentials = $request->only('name','email', 'password');
    
        // Si el usuario existe lo logamos y lo llevamos a la vista de "logados" con un mensaje
        if (Auth::attempt($credentials)) {
<<<<<<< HEAD
<<<<<<< HEAD
            return redirect()->intended('logados')
=======
            return redirect()->intended('logados')//vista_menu
>>>>>>> 281acd474f47711bfa14a288d8c6e14ce1ec1dac
=======
            return redirect()->intended('logados')//vista_menu
>>>>>>> ivank
                ->withSuccess('Logado Correctamente');
        }
    
        // Si el usuario no existe devolvemos al usuario al formulario de login con un mensaje de error
        return redirect("/iniciosesion")->withSuccess('Los datos introducidos no son correctos');
    }
    
    /**
    * Función que muestra la vista de logados si el usuario está logado y si no le devuelve al formulario de login
    * con un mensaje de error
    */
    public function logados()
    {
        if (Auth::check()) {
            return view('inicio.logados');
        }
    
        return redirect("/iniciosesion")->withSuccess('No tienes acceso, por favor inicia sesión');
    }
}