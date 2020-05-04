<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'key'=> strtolower($faker->word),
        'display_name'=> $faker->unique()->sentence(random_int(1,3)),
    ];
});
