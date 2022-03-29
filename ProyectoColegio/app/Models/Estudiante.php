<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = "estudiante";
    
    protected $fillable = [
        'Nom_estudiante',
        'Apell_estudiante',
        'Direccion',
        'Telefono',
        'Tipo_documento',
        'Num_documento',
    ];
}
