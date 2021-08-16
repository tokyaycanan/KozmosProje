<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    use HasFactory;
  protected $primaryKey='SiparisNo';
  protected $table='siparis';
  protected $fillable=array('UrunKodu','Adet','MusteriId');

  public function SiparisOlustur()
  {
    return $this->belongsTo('App\Models\Musteri','MusteriId');
    return $this->belongsTo('App\Models\urunler','UrunKodu');
  }
}
