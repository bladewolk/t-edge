<?php

use App\Models\Country;
use App\Models\Number;
use App\Models\SendLog;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 100)->create();

        factory(Country::class, 25)->create()->each(function ($country) {
            $country->numbers()->saveMany(factory(Number::class, 4)->make());
        });

        factory(SendLog::class, 500)->create();
    }
}
