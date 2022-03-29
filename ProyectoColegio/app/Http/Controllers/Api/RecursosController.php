<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Recursos;
use Hash;
class RecursosController extends Controller
{
    //
    public function index()
    {
        //pasamos todos los campos de articulo para ser retornados
        $recursos
         = Recursos::all();

        // (['id', 'name'])
        return $recursos
        ;

    }

    public function store(Request $request)
    {
 
        $recursos
         = new Recursos();
        $recursos->Nombre_recurso = $request->Nombre_recurso;
        $recursos->Tipo = $request->Tipo;
        

        $recursos ->save();

        return $recursos
        ;
    }

    public function update(Request $request, $id)
    {
 
        $recursos
         = Recursos::findOrFail($request->id);
        $recursos->Nombre_recurso = $request->Nombre_recurso;
        $recursos ->Tipo = $request->Tipo;


        $recursos->save();

        return $recursos
        ;
    }

    public function destroy(Request $request, $id)
    {
 
        $recursos
         = Recursos::destroy($request->id);

        return $recursos
        ;
    }
}
