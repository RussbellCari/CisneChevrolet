<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    // Proteger el campo 'id' de la asignación masiva
    protected $guarded = ['id'];

    // Relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relación con el modelo Vehiculo
    public function vehiculo()
    {
        return $this->belongsTo(Vehiculo::class);
    }

    // Relación con el modelo NotaVenta (si es necesario)
    public function notaVentas()
    {
        return $this->hasMany(NotaVenta::class);
    }
}
