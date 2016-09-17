<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(123456),
        'remember_token' => str_random(10),
        'image' => 'no_image.png',
        'gender' => 'm',
    ];
});

$factory->define(App\Task::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->id,
        'name' => $faker->text,
    ];
});
