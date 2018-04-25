<?php

use Illuminate\Database\Seeder;

class NursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Nurse::class,20)->create();
    }
}
