<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Anuncio;

class CentroEducativo extends Model
{
  protected $table ="centro_educativos";
  protected $fillable = array('tipo_ce','nombre','direccion','imagen_ce');
  protected $hidden = ['created_at', 'updated_at'];

  public function anuncios(){
    return $this->hasMany('Anuncio');
  }
}
