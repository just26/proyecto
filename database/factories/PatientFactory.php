<?php

use Faker\Generator as Faker;


$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'nurse_id' => function () {
            return factory(App\Nurse::class)->create()->id;
        },
        'nuhsa' => str_random(10),

        /*'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'tlp' => rand(600000000,999999999),
        'address' => str_random(10),
        'DNI/NIF' => str_random(10),
        'age' => rand(0,100),*/
        //
    ];


});
