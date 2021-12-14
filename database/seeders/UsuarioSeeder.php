<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
    		'name'=>'Jhonny',
    		'email'=>'jhonnyfernandez@gmail.com',
    		'password'=>bcrypt('jfv123')
    	]);
        Usuario::factory(30)->create();
    }
}
