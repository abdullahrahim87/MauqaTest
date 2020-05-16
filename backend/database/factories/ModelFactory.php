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
    return [
        'name'     => $faker->name,
        'email'    => $faker->unique()->email,
        'password' =>app('hash')->make('click123'),
    ];
});

$factory->define(App\Film::class, function (Faker\Generator $faker) {
    return [
        'name'     => $faker->title,
        'description'    => $faker->paragraph,
        'release_date' => $faker->dateTime,
        'rating' => $faker->randomFloat(2, 1, 5),
        'photo' => "thumb.png",
        'country' => $faker->country,
        'ticket_price' => $faker->randomFloat(2, 90, 100)
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'name'     => $faker->name,
        'comment'    => $faker->paragraph,
    ];
});

$factory->define(App\Genre::class, function (Faker\Generator $faker) {
    return [
        'title'     => $faker->name,
    ];
});
