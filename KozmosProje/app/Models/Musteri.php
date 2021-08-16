<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musteri extends Model
{
  use HasFactory;
      protected $primaryKey='MusteriId';
      protected $table='musteri';
      protected $fillable=array('Adi','SoyAdi','telefon');

      public function SiparisOlusturma()
      {
        return $this->hasMany('App\Models\Siparis','MusteriId');
      }
}
