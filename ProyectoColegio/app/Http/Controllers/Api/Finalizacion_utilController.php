<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Finalizacion_util;
use Hash;

class Finalizacion_utilController extends Controller
{
    //

    public function index()
    {
        //pasamos todos los campos de articulo para ser retornados
        $finalizacion = Finalizacion_util::all();

        // (['id', 'name'])
        return $finalizacion;

    }

    public function store(Request $request)
    {
 
        $finalizacion = new Finalizacion_util();
        $finalizacion->Avances = $request->Avances;
        $finalizacion->Fecha_avances = $request->Fecha_avances;
        $finalizacion->Precio = $request->Precio;
        $finalizacion->proyecto_id = $request->proyecto_id;

        $finalizacion->save();

        return $finalizacion;
    }

    public function update(Request $request, $id)
    {
 
        $finalizacion = Finalizacion_util::findOrFail($request->id);
        $finalizacion->Avances = $request->Avances;
        $finalizacion->Fecha_avances = $request->Fecha_avances;
        $finalizacion->Precio = $request->Precio;
        $finalizacion->proyecto_id = $request->proyecto_id;

        $finalizacion->save();

        return $finalizacion;
    }

    public function destroy(Request $request, $id)
    {
 
        $finalizacion = Finalizacion_util::destroy($request->id);

        return $finalizacion;
    }

}
