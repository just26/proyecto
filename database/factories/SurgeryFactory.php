<?php

use Faker\Generator as Faker;

$factory->define(App\Surgery::class, function (Faker $faker) {
    return [
        'doctor_id' => function () {
            return factory(App\Doctor::class)->create()->id;
        },
        'patient_id' => function () {
            return factory(App\Patient::class)->create()->id;
        },
        'date' => $faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),//today(),
        'operatingroom' => str_random(10),
    ];
});
