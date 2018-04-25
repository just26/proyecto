<?php

use Faker\Generator as Faker;

$factory->define(App\Nurse::class, function (Faker $faker) {
    return [
        'office' => str_random(10),
    ];
});
