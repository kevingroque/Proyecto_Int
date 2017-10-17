<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
      'nombres'=>'Keving Hanz',
      'apellidos'=>'Roque Huich',
      'email'=>'keving123@correo.com',
      'password'=>Hash::make('123456'),
      'estado'=>'Soltero',
      'tipo_user'=>'Administrador',
      'imagen_user'=>'keving.jpg'
    ]);
	}

}
