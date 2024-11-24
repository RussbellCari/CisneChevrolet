<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proforma extends Model

{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'nombre',
        'fecha_emision',
        'subtotal',
        'impuestos',
        'total',
        'cliente_id',
        'vehiculo_id',
        'vehiculocliente_id',
        'repuesto_id',
        'mantenimiento_id',
    ];



    public function cliente()
{
    return $this->belongsTo(Cliente::class);
}

public function vehiculo()
{
    return $this->belongsTo(Vehiculo::class);
}

public function vehiculocliente()
{
    return $this->belongsTo(VehiculoCliente::class);
}

public function repuesto()
{
    return $this->belongsTo(Repuesto::class);
}
public function mantenimiento()
{
    return $this->belongsTo(Mantenimiento::class);
}

}
