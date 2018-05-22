<?php

use Faker\Generator as Faker;

$factory->define(App\Nurse::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'patient_id' => function () {
            return factory(App\Patient::class)->create()->id;
        },
        'office' => str_random(10),
    ];
});
