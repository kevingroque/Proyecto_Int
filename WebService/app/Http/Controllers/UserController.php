<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{

/*  public function __construct(){
      $this->middleware('auth');
  }*/
  public function login(Request $request){
        $email=$request->get('email');
        $password=$request->get('password');

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $respuesta = "true";
            return Auth::user();

        }else {
            return $respuesta = "false";
        }
      }


      public function index(){
    		$user=User::all();
    		return response()->json(['users'=> $user],200);
    	}

      public function show($id){
		      $user=User::find($id);
          if(!$user){
			       return response()->json(['mensaje'=> 'No se encontro al Usuario', 'codigo'=>404],404);
		       }
           return response()->json(['datos'=> $user],200);
      }

      public function create(){
        return "Menu para crear user";
      }

    public function store(Request $request){
        /*if(!$request->has('nombres') || !$request->has('apellidos') || !$request->has('email') || !$request->has('password') || !$request->has('estado') || !$request->has('tipo_user')){
          return response()->json(['mensaje'=> 'Datos Invalidos o incompletos'],422);
        }
        User::create($request->all());
        return response()->json(['mensaje'=> 'Usuario creado exitosamente'],200);*/

        try{
          if(!$request->has('nombres') || !$request->has('apellidos') || !$request->has('email') || !$request->has('password') || !$request->has('estado') || !$request->has('tipo_user')){
            throw new \Exception('Se esperaba campos mandatorios');
          }
          $user = new User();
          $user->nombres = $request->get('nombres');
          $user->apellidos = $request->get('apellidos');
          $user->email = $request->get('email');
          $user->password = $request->get('password');
          $user->estado = $request->get('estado');
          $user->tipo_user = $request->get('tipo_user');

          if($request->hasFile('imagen_user') && $request->file('imagen_user')->isValid()){
            $imagen_user = $request->file('imagen_user');
            $filename = $request->file('imagen_user')->getClientOriginalName();
            Storage::disk('images')->put($filename,  File::get($imagen_user));
            $user->imagen_user = $filename;
          }
          $user->save();
          return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);
        }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 404);
        }
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
