<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehiculoCliente extends Model
{
    protected $guarded=['id'];


    #Relación de uno a muchos
    public function mantenimientos(){
        return $this->hasMany(Mantenimiento::class);
    }

    // Relación uno a muchos con Proforma
    public function proformas(){
        return $this->hasMany(Proforma::class);
    }
}
