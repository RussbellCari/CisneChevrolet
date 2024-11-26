<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{

    protected $guarded=['id'];


    #Relación de uno a muchos
    public function proformas(){
       return $this->hasMany(Proforma::class);
   }
   public function reservas()
   {
       return $this->hasMany(Reserva::class);
   }

   // Relación con el modelo NotaVenta
   public function notaVentas()
   {
       return $this->hasMany(NotaVenta::class);
   }
   use HasFactory;

   protected $fillable = [ 'marca', 'modelo', 'anio'];

   public function vehiculoCliente()
   {
       return $this->hasMany(VehiculoCliente::class, 'id_vehiculo');
   }
}
