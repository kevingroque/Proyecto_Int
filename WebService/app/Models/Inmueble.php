<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Anuncio;

class Inmueble extends Model
{
  protected $table ="inmuebles";
  protected $fillable = array('tipo_imb','ubicacion','precio','num_dormitorios','num_banios','area_total','estado_imb','imagen_imb','anuncio_id');
  protected $hidden = ['created_at', 'updated_at'];

  public function anuncio(){
    return $this->hasOne('Anuncio','id');
  }
}
