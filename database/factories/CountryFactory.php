<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Country;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    return [
        'cnt_code' => $faker->countryCode,
        'cnt_title' => $faker->country,
        'cnt_created' => now()
    ];
});
