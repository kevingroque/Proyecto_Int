<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Inmueble;

class InmuebleController extends Controller
{
  public function index()
  	{
  		$inmuebles=Inmueble::all();
  		if(!$inmuebles){
  			return response()->json(['mensaje'=> 'No existe', 'codigo'=>404],404);
  		}
  		return response()->json(['inmuebles'=> $inmuebles],200);
  	}

    public function show($id){
        $inmuebles=Inmueble::find($id);
        if(!$inmuebles){
           return response()->json(['mensaje'=> 'No se encontro al fabricante', 'codigo'=>404],404);
         }
         return response()->json(['inmuebles'=> $inmuebles],200);
    }

}
