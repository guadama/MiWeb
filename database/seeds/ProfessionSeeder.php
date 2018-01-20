<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;
//use App\Profession;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::insert('insert into profession(title) values(?),(?),(?)', [
            'Desarrollador Front-end',
            'Desarrollador Back-end',
            'Diseñador Web'
        ]);

    Profession::create([
          'title' => 'Pruebas y Calidad'
         ]);


//INSERT INTO profession(title) VALUES ('fsdsf'),('futusf'),('fnm,nsf')

        // DB::table('profession')->insert([
        // 	'title' => 'Desarrollador Front-end',

        // ]);

        // DB::table('profession')->insert([
        // 	'title' => 'Desarrollador Back-end',

        // ]);

        // DB::table('profession')->insert([
        // 	'title' => 'Diseñador Web',

        // ]);
    }
}
