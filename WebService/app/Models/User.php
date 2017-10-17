<?php

namespace App\Models;

use App\Models\Anuncio;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table ="users";
  protected $fillable = array('nombres','apellidos','email','password','estado','tipo_user','imagen_user');
  protected $hidden = ['created_at', 'updated_at','password'];

  public function anuncios(){
    return $this->hasMany('App\Models\Anuncio');
  }

}
