<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recursos extends Model
{
    use HasFactory;
    protected $table = "recursos";
    
    protected $fillable = [
        'Nombre_recurso',
        'Tipo',
    ];
}
