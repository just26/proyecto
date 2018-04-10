<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('patients')->insert([
            'name' => str_random(10),
            'surname' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'tlp' => str_random(10),
            'address' => str_random(10),
            'DNI/NIF' => str_random(10),
            'age' => str_random(10),
        ]);
    }
}
