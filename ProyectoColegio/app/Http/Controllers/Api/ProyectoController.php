<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Proyecto;
use Hash;

class ProyectoController extends Controller
{
    //

    public function index()
    {
        //pasamos todos los campos de articulo para ser retornados
        $proyecto = Proyecto::all();

        // (['id', 'name'])
        return $proyecto;

    }

    public function store(Request $request)
    {
 
        $proyecto = new Proyecto();
        $proyecto->Nom_proyecto = $request->Nom_proyecto;
        $proyecto->Tiempo_inicio = $request->Tiempo_inicio;
        $proyecto->Tiempo_final = $request->Tiempo_final;

        $proyecto->save();

        return $proyecto;
    }

    public function update(Request $request, $id)
    {
 
        $proyecto = Proyecto::findOrFail($request->id);
        $proyecto->Nom_proyecto = $request->Nom_proyecto;
        $proyecto->Tiempo_inicio = $request->Tiempo_inicio;
        $proyecto->Tiempo_final = $request->Tiempo_final;

        $proyecto->save();

        return $proyecto;
    }

    public function destroy(Request $request, $id)
    {
 
        $proyecto = Proyecto::destroy($request->id);

        return $proyecto;
    }
}
