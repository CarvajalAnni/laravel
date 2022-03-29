<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    protected $table = "proyecto";
    
    protected $fillable = [
        'Nom_proyecto',
        'Tiempo_inicio',
        'Tiempo_final',
    ];

}
