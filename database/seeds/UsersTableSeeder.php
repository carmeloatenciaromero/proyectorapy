<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
        	'name'=>'carmelo',
        	'email'=>'carmelo-atencia@hotmail.com',
        	'password'=>bcrypt('carmelo'),
            'admin'=>true,
            'direccion'=>'socorro',
            'telefono'=>'3207842184',
            'sexo'=>'masculino'
        ]);
    }
}
