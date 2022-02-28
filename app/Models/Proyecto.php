<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_proyecto',
        'descripcion_proyecto',
        'lenguaje',
        'fecha_inicio',
        'fecha_fin',
        'id_user '
    ];
}
