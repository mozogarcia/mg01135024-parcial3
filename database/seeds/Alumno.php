<?php

use Illuminate\Database\Seeder;

use App\Alumnos;
use App\User;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Spatie\Permission\Models\Role;



class Alumno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'profesor']);
        Role::create(['name' => 'alumno']);
        $faker = Factory::create();
        $gender = $faker->randomElement(['M', 'F']);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('alumnos')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('users')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

   

        $datos = [
            'nombre' => 'ezequiel',
        'apellido' => 'mozo',
        'fechanacimiento' => '2021-09-18',
        'direccion' => 'San Salvador',
        'genero' => 'M',
        'telefono' => 73646424,
        'correo' => 'ezequiel@gmail.com',
        'clave' =>  bcrypt('prueba123'),
        ];

        $user = User::create([
            'name' => 'ezequiel mozo',
            'email' => 'ezequiel@gmail.com',
            'password' => bcrypt('prueba123'),
            'idalumno' => '1'
        ]);
        $user->assignRole('alumno');

        Alumnos::create($datos);


       



    }
}
