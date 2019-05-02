<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\SendLog;
use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(SendLog::class, function (Faker $faker) {
    return [
        'usr_id' => rand(1, 100),
        'num_id' => rand(1, 100),
        'log_message' => $faker->text(50),
        'log_success' => $faker->boolean,
        'log_created' => Carbon::now()->subDays(rand(1, 100))
    ];
});
