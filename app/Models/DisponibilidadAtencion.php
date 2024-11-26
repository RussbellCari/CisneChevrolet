<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisponibilidadAtencion extends Model
{
    use HasFactory;

    // Especifica el nombre exacto de la tabla
    protected $table = 'disponibilidad_atencion'; // Nombre correcto de la tabla en la base de datos

    protected $fillable = [
        'fecha',
        'hora'
    ];
}
