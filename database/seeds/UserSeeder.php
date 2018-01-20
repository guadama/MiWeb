<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    //	$professions = DB::select('select id from profession');

	//   $professions = DB::table('profession')->select('id')->get();

    //	$professions = DB::table('profession')->value('id'); //muestra el primer valor

       //$p=Profession::all()->random(1)->pluck('id')->first();
     //  $p2=$p->pluck('id');

    	//dd($p);

        DB::table('users')->insert([
        	'name' => 'Juan Guadama',
            'email' => 'jcguadama@gmail.com',
            'password' => bcrypt('123'),
            //'profession_id' => $professions[0]->id
            'profession_id' => Profession::all()->random(1)->pluck('id')->first()
        ]);

        DB::table('users')->insert([
        	'name' => 'Roxsana Romero',
            'email' => 'roxsanaromero@gmail.com',
            'password' => bcrypt('456'),
            'profession_id' => Profession::all()->random(1)->pluck('id')->first()
        ]);

        DB::table('users')->insert([
        	'name' => 'Raquel Reyes',
            'email' => 'natasha.reyes.romero@gmail.com',
            'password' => bcrypt('789'),
            'profession_id' => Profession::all()->random(1)->pluck('id')->first()
        ]);
    }
}
