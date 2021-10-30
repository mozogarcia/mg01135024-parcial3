<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

use App\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('profesor')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('profesor')->insert([
            'nombre' => 'Alvaro',
            'apellido' => 'garcia',
            'dui' => 23306425,
            'telefono' => 79798080,
            'email' => 'alvaro@gmail.com',
            'clave' => bcrypt('12345678'),
        ]);


        $user = User::create([
            'name' => ' alvaro',
            'email' => 'alvaroprofesor@gmail.com',
            'password' => bcrypt('prueba123'),
            'idprofesor' => '1'
        ]);
        $user->assignRole('profesor');



        


    }
}

