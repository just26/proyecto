<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class,20)->create();
        //factory(App\Patient::class,20)->create();

        /*DB::table('users')->insert([
            'name' => str_random(10),
            'surname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'tlp' => rand(600000000,999999999),
            'adrress' => str_random(10),
            'DNI/NIF' => str_random(10),
            'age' => rand(0,100),
        ]);*/
    }
}
