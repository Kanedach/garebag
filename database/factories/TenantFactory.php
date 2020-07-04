<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tenant;
use Faker\Generator as Faker;

$factory->define(Tenant::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(["Laden", "Haus", "OG1", "OG2"])
    ];
});
