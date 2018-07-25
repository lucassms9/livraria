<?php

use Illuminate\Database\Seeder;
use  App\Models\Usuario;
class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
        	'nome' => 'lucas santos',
        	'sobrenome' => 'lucassms9@hotmail.com',
        	'active' => '1',
        	'email' => 'lucassms9@hotmail.com',
        	'senha' => bcrypt('1231456')
         ]);
    }
}
