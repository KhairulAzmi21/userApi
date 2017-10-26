<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
        'state_id' => $faker->numberBetween($min = 1, $max = 17),
        'gender_id'=> $faker->numberBetween($min = 1, $max = 2),
        'age'=> $faker->numberBetween($min = 20, $max = 40),
        'status_id'=> $faker->numberBetween($min = 1, $max = 3),
        'race_id'=> $faker->numberBetween($min = 1, $max = 4),
        'religion_id'=> $faker->numberBetween($min = 1, $max = 5)

    ];
});
