<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Anuncio;

class AnuncioController extends Controller
{
  public function index(){
    $anuncio=Anuncio::all();
    if(!$anuncio){
       return response()->json(['mensaje'=> 'No se encontro al fabricante', 'codigo'=>404],404);
     }
     return response()->json(['anuncios'=> $anuncio],200);
  }

  public function show($id){
    $anuncio=Anuncio::find($id);
    if(!$anuncio){
       return response()->json(['mensaje'=> 'No se encontro al fabricante', 'codigo'=>404],404);
     }
     return response()->json(['anuncios'=> $anuncio],200);
  }

  public function create(){
    return "Menu para crear user";
  }

  public function store(){

  }

  public function edit($id){
    return "Menu para editar user $id";
  }

  public function update($id){
    return "Actualizar user $id";
  }

  public function destroy($id){
    return "Eliminar user $id";
  }

}
