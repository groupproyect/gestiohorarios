<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registroinstruController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\AmbienteFormacionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*-------------------------------------------------------
RUTAS DE SEDE 
--------------------------------------------------------*/

   /*VISUALIZAR*/
Route::get('/sedes', [SedeController::class , 'index'])->name('mostrar_sedes');


    /*CREAR*/
Route::match(['get','post'],'/sede/crear', [SedeController::class, 'create'])->name('crear_sede');
Route::post('/sede/guardar', [SedeController::class, 'store'])->name('guardar_sede');

    /*ACTUALIZAR*/
Route::get('/ambientes/editar_sede/{id}',[SedeController::class,'editar'])->name('editar_sede');
Route::post('ambientes/actualizar_sede',[SedeController::class,'update'])->name('actualizar_sede');

 /*Eliminar*/
 Route::delete('/sedes/delete/{s}',  [SedeController::class, 'destroy'])->name('eliminar_sede');

/*-------------------------------------------------------
RUTAS DE AMBIENTE
--------------------------------------------------------*/

   /*VISUALIZAR*/
Route::get('/ambientes', [AmbienteFormacionController::class,'indexa'] )->name('mostrar_ambientes');

   /*CREAR*/
Route::match(['get','post'],'/ambientes/crear', [AmbienteFormacionController::class,'createa'] )->name('crear_ambiente');
Route::match(['get','post'],'/ambientes/guardar', [AmbienteFormacionController::class,'store'] ) ->name('guardar_ambiente');

    /*ACTUALIZAR*/
Route::get('/ambientes/editar_ambiente/{id}',[AmbienteFormacionController::class,'editar'])->name('editar_ambiente');
Route::post('ambientes/actualizar_ambiente',[AmbienteFormacionController::class,'update'])->name('actualizar_ambiente');
    
 /*Eliminar*/
 Route::delete('/ambientes/delete/{e}',  [AmbienteFormacionController::class, 'destroy'])->name('eliminar_ambiente');
/*-------------------------------------------------------
RUTAS DE AREA
--------------------------------------------------------*/

   /*VISUALIZAR*/
Route::get('/areas',[AreaController::class,'index'])->name('mostrar_areas');

    /*CREAR*/
Route::match(['get','post'],'/areas/crear_area',[AreaController::class,'create'])->name('crear_area');
Route::match(['get','post'],'/areas/guardar_area',[AreaController::class,'store'])->name('guardar_area');

    /*ACTUALIZAR*/
Route::get('/admin/editar_area/{id}',[AreaController::class,'editar'])->name('editar_area');
Route::post('admin/actualizar_area',[AreaController::class,'update'])->name('actualizar_area');

/*Eliminar*/
Route::delete('/areas/delete/{re}',  [AreaController::class, 'destroy'])->name('eliminar_area');
/*-------------------------------------------------------
RUTAS ADICIONALES
--------------------------------------------------------*/

//Route::get('/', [loginController::class ,'indexlo']);
Route::get('/registro' , [registroinstruController::class,'indexre']); //funtion index_registro

/*-------------------------------------------------------
RUTAS X
--------------------------------------------------------*/
Route::get('/registroambiente',[SedeController::class,'sede_ambiente']);
Route::get('/principal', function () {
    return view('menu.index');
});

