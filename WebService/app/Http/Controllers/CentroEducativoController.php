<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\CentroEducativo;

class CentroEducativoController extends Controller
{
  public function index(){
    $centro_educativos=CentroEducativo::all();
    if(!$centro_educativos){
      return response()->json(['mensaje'=> 'No existe', 'codigo'=>404],404);
    }
    return response()->json(['centros_educativos'=> $centro_educativos],200);
  }
}
