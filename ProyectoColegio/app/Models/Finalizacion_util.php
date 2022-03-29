<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finalizacion_util extends Model
{
    use HasFactory;
    protected $table = "_finalizacion";
    
    protected $fillable = [
        'Avances',
        'Fecha_avances',
        'Precio',
        'proyecto_id',
    ];
}
