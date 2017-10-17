<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Anuncio;
use App\Models\User;
use App\Models\Inmueble;

class UserAnuncioController extends Controller
{
  public function index($id)
	{
		$user=User::find($id);
    $anuncios=$user->anuncios;
    if(!$user){
       return response()->json(['mensaje'=> 'No se encontro al fabricante', 'codigo'=>404],404);
     }
     return response()->json(['datos'=> $anuncios],200);
	}

  public function create($id){

  }

  public function store(Request $request){
    if(!$request->has('imagen_an') || !$request->has('user_id') || !$request->has('inmueble_id') || !$request->has('centro_educativo_id')){
      return response()->json(['mensaje'=> 'Datos Invalidos o incompletos'],422);
    }
    $user=User::find($request->get('user_id'));
    if(!$user){
      return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
    }
    Anuncio::create($request->all());
    return response()->json(['mensaje'=> 'Anuncio creado exitosamente'],200);
  }

  public function show($idUser, $idAnuncio){

  }

  public function edit($idUser, $idAnuncio){

  }

  public function update($idUser, $idAnuncio){

  }

  public function destroy(){

  }

}
