<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $guarded=['id'];

        #Relación de uno a muchos
        public function proformas(){
            return $this->hasMany(Proforma::class);
        }

    // Relación con el modelo Reserva
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    // Relación con el modelo NotaVenta
    public function notaVentas()
    {
        return $this->hasMany(NotaVenta::class);
    }
}


