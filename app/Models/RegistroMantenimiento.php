<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroMantenimiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehiculo_cliente_id',
        'descripcion',
        'costo',
        'disponibilidad_atencion_id',
    ];

    // Relación con VehiculoCliente
    public function vehiculoCliente()
    {
        return $this->belongsTo(VehiculoCliente::class, 'vehiculo_cliente_id');
    }

    // Relación con DisponibilidadAtencion
    public function disponibilidadAtencion()
    {
        return $this->belongsTo(DisponibilidadAtencion::class, 'disponibilidad_atencion_id');
    }
}
