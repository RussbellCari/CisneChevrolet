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


   // Relación con el modelo NotaVenta
   public function notaVentas()
   {
       return $this->hasMany(NotaVenta::class);
   }

   public function vehiculo()
   {
       return $this->belongsTo(Vehiculo::class, 'vehiculo_id');

   }
   public function cliente()
   {
       return $this->belongsTo(Cliente::class, 'cliente_id');
   }


}
