<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\CentroEducativo;
use App\Models\Inmueble;

class Anuncio extends Model
{
  protected $table ="anuncios";
  protected $fillable = array('imagen_an','user_id','inmueble_id','centro_educativo_id');
  protected $hidden = ['created_at', 'updated_at'];

  public function user(){
    return $this->belongsTo('User');
  }

  public function centro_educativo(){
    return $this->belongsTo('CentroEducativo');
  }

  public function inmueble(){
    return $this->hasOne('Inmueble','id');
  }
}
