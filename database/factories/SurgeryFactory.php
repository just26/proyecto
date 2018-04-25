<?php

use Faker\Generator as Faker;

$factory->define(App\Surgery::class, function (Faker $faker) {
    return [
        'date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),//today(),
        'operatingroom' => str_random(10),
    ];
});
