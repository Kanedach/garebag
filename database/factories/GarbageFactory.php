<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Garbage;
use Faker\Generator as Faker;

$factory->define(Garbage::class, function (Faker $faker) {
    return [
        'weight' => rand(600,8000),
        'date' => $faker->date(),
        'tenant_id' => rand(1,3)
    ];
});
