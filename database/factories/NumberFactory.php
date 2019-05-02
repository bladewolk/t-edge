<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Number;
use Faker\Generator as Faker;

$factory->define(Number::class, function (Faker $faker) {
    return [
        'num_number' => $faker->phoneNumber,
        'num_created' => now(),
        'cnt_id' => rand(1, 25)
    ];
});
