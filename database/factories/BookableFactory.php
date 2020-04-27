<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bookable;
use Faker\Generator as Faker;

$factory->define(Bookable::class, function (Faker $faker) {
    return [
        'title'=> $faker->city .'Rooms',
        'description'=> $faker->paragraph,
        'price'=> $faker->numberBetween(40,100),
    ];
});
