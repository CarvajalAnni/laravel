<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Estudiante;
use Hash;


class EstudianteController extends Controller
{
    //

    public function index()
    {
        //pasamos todos los campos de articulo para ser retornados
        $estudiante = Estudiante::all();

        // (['id', 'name'])
        return $estudiante;

    }

    public function store(Request $request)
    {
 
        $estudiante = new Estudiante();
        $estudiante->Nom_estudiante = $request->Nom_estudiante;
        $estudiante->Apell_estudiante = $request->Apell_estudiante;
        $estudiante->Direccion = $request->Direccion;
        $estudiante->Telefono = $request->Telefono;
        $estudiante->Tipo_documento = $request->Tipo_documento;
        $estudiante->Num_documento = $request->Num_documento;

        $estudiante->save();

        return $estudiante;
    }

    public function update(Request $request, $id)
    {
 
        $estudiante = Estudiante::findOrFail($request->id);
        $estudiante->Nom_estudiante = $request->Nom_estudiante;
        $estudiante->Apell_estudiante = $request->Apell_estudiante;
        $estudiante->Direccion = $request->Direccion;
        $estudiante->Telefono = $request->Telefono;
        $estudiante->Tipo_documento = $request->Tipo_documento;
        $estudiante->Num_documento = $request->Num_documento;

        $estudiante->save();

        return $estudiante;
    }

    public function destroy(Request $request, $id)
    {
 
        $estudiante = Estudiante::destroy($request->id);

        return $estudiante;
    }
}
