<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'name'=>'brand'. $faker->unique()->randomNumber(5),
        'display_name'=>'brand AB-'. random_int(500,999),
        'description'=>$faker->text(),

    ];
});
