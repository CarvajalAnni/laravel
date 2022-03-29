<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\API\MateriaController;
use App\Http\Controllers\API\EstudianteController;
use App\Http\Controllers\API\RecursosController;
use App\Http\Controllers\API\Finalizacion_utilController;
use App\Http\Controllers\API\ProyectoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//TABLA PROYECTO
Route::get('indexproyecto', [ProyectoController::class, 'index']);
Route::post('storeproyecto', [ProyectoController::class, 'store']);
Route::put('/proyecto/{id}', [ProyectoController::class,'update']);
Route::delete('/proyecto/{id}', [ProyectoController::class,'destroy']);



//TABLA FINALIZACION UTIL
Route::get('indexfinalizacion', [Finalizacion_utilController::class, 'index']);
Route::post('storefinalizacion', [Finalizacion_utilController::class, 'store']);
Route::put('/finalizacion/{id}', [Finalizacion_utilController::class,'update']);
Route::delete('/finalizacion/{id}', [Finalizacion_utilController::class,'destroy']);



//TABLA RECURSOS
Route::get('indexrecursos', [RecursosController::class, 'index']);
Route::post('storerecursos', [RecursosController::class, 'store']);
Route::put('/recursos/{id}', [RecursosController::class,'update']);
Route::delete('/recursos/{id}', [RecursosController::class,'destroy']);


// ESTUDIANTE TABLA
Route::get('indexestudiante', [EstudianteController::class, 'index']);
Route::post('storeestudiante', [EstudianteController::class, 'store']);
Route::put('/estudiante/{id}', [EstudianteController::class,'update']);
Route::delete('/estudiante/{id}', [EstudianteController::class,'destroy']);



// TABLA MATERIA

Route::get('index', [MateriaController::class, 'index']);
Route::post('store', [MateriaController::class, 'store']);
Route::put('/materia/{id}', [MateriaController::class,'update']);
Route::delete('/materia/{id}', [MateriaController::class,'destroy']);


//TABLA USUARIO CON SUS FUNCIONES-MÉTODOS
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);

Route::group( ['middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::get('userProfile', [UserController::class, 'userProfile']);
    Route::get('logout', [UserController::class, 'logout']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//EJERCICIO Eliminar el token, eliminar registro de personalacces mensaje con "Su sesión ha sido cerrada"