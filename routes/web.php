<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\AmbienteFormacionController;
use App\Http\Controllers\RedTematicaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\UserController;
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

Route::get('/sedes', [SedeController::class , 'index'])->name('mostrar_sedes');

Route::match(['get','post'],'/sede/crear', [SedeController::class, 'create'])->name('crear_sede');
Route::post('/sede/guardar', [SedeController::class, 'store'])->name('guardar_sede');

Route::get('/ambientes/editar_sede/{id}',[SedeController::class,'editar'])->name('editar_sede');
Route::post('ambientes/actualizar_sede',[SedeController::class,'update'])->name('actualizar_sede');

 Route::delete('/sedes/delete/{s}',  [SedeController::class, 'destroy'])->name('eliminar_sede');

/*-------------------------------------------------------
RUTAS DE AMBIENTE
--------------------------------------------------------*/

Route::get('/ambientes', [AmbienteFormacionController::class,'indexa'] )->name('mostrar_ambientes');

Route::match(['get','post'],'/ambientes/crear', [AmbienteFormacionController::class,'createa'] )->name('crear_ambiente');
Route::match(['get','post'],'/ambientes/guardar', [AmbienteFormacionController::class,'store'] ) ->name('guardar_ambiente');

Route::get('/ambientes/editar_ambiente/{id}',[AmbienteFormacionController::class,'editar'])->name('editar_ambiente');
Route::post('ambientes/actualizar_ambiente',[AmbienteFormacionController::class,'update'])->name('actualizar_ambiente');
 
Route::delete('/ambientes/delete/{e}',  [AmbienteFormacionController::class, 'destroy'])->name('eliminar_ambiente');

/*-------------------------------------------------------
RUTAS DE AREA
--------------------------------------------------------*/

Route::get('/areas',[AreaController::class,'index'])->name('mostrar_areas');

Route::match(['get','post'],'/areas/crear_area',[AreaController::class,'create'])->name('crear_area');

Route::match(['get','post'],'/areas/guardar_area',[AreaController::class,'store'])->name('guardar_area');
Route::get('/admin/editar_area/{id}',[AreaController::class,'editar'])->name('editar_area');

Route::post('admin/actualizar_area',[AreaController::class,'update'])->name('actualizar_area');
Route::delete('/areas/delete/{re}',  [AreaController::class, 'destroy'])->name('eliminar_area');


/*-------------------------------------------------------
RUTAS DE RED TEMATICA
--------------------------------------------------------*/

Route::get('/redtematica', [RedTematicaController::class , 'index'])->name('mostrar_redtematica');

Route::match(['get','post'],'/redtematica/crear', [RedTematicaController::class, 'create'])->name('crear_redtematica');
Route::post('/redtematica/guardar', [RedTematicaController::class, 'store'])->name('guardar_redtematica');

Route::get('/redtematica/editar_redtematica/{id}',[RedTematicaController::class,'edit'])->name('editar_redtematica');
Route::post('redtematica/actualizar_redtematica',[RedTematicaController::class,'update'])->name('actualizar_redtematica');

 Route::delete('/redtematica/delete/{r}',  [RedTematicaController::class, 'destroy'])->name('eliminar_redtematica');

/*-------------------------------------------------------
RUTAS DE INSTRUCTOR
--------------------------------------------------------*/
//Route::get('/instructor', [InstructorController::class , 'index'])->name('mostrar_instructor');
Route::match(['get','post'],'/instructor/crear', [InstructorController::class,'create'] )->name('crear_instructor');
Route::match(['get','post'],'/instructor/guardar', [InstructorController::class,'store'] )->name('guardar_instructor');
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
})->name('vista_menu');
/*-------------------------------------------------------
RUTA DE INICIO DE SESION
--------------------------------------------------------*/
Route::match(['get','post'],'/iniciosesion/crear' ,[UserController::class,'create'])->name('iniciosesion_cre');
Route::post('/iniciosesion/guardar', [UserController::class, 'store'])->name('guardar_iniciosesion');



<<<<<<< HEAD
Route::get('/horario' , function(){ return view('horarios.prueba');})->name('horario');
=======
Route::get('/horario' , function(){ return view('horarios.principal');})->name('horario');
Route::get('/prueba/persona' , [PersonaController::class,'mostrar_person']);
Route::match(['get','post'],'/horario/crear', [HorarioController::class,'prueba'] )->name('prueba_h');
>>>>>>> ivank

Route::get('/prueba2/horario' , [HorarioController::class,'javascript']);

Route::get('/instructor',[InstructorController::class,'index'])->name('mostrar_instructores');
route::post('/actualizar',[InstructorController::class,'update'])->name('actualizarlider');

route::get('/mostrar',[InstructorController::class,'mostrar']);
