<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaVenta extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'fecha_emision',
        'subtotal',
        'pago',
        'cliente_id',
        'vehiculo_id',
        'vehiculocliente_id',
        'repuesto_id',
        'mantenimiento_id',
        'reserva_id',
    ];

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

    // Relación con el modelo VehiculoCliente
    public function vehiculocliente()
    {
        return $this->belongsTo(VehiculoCliente::class);
    }

    // Relación con el modelo Repuesto
    public function repuesto()
    {
        return $this->belongsTo(Repuesto::class);
    }

    // Relación con el modelo Mantenimiento
    public function mantenimiento()
    {
        return $this->belongsTo(Mantenimiento::class);
    }

    // Relación con el modelo Reserva
    public function reserva()
    {
        return $this->belongsTo(Reserva::class);
    }
}
