<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunler extends Model
{
    use HasFactory;
      protected $primaryKey='UrunKodu';
      protected $table='urunler';
      protected $fillable=array('Adi');

      public function Siparis()
      {
        return $this->hasMany('App\Models\Siparis','UrunKodu');
      }
}
