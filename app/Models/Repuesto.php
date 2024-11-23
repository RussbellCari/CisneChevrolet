<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repuesto extends Model
{
    protected $guarded=['id'];

    #Relación de uno a muchos
    public function proformas(){
       return $this->hasMany(Proforma::class);
   }
}
