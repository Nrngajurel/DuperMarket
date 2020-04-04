<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->name.' - '.random_int(1001,1111),
        'slug'=> $faker->unique()->userName,
        'min_price'=> $faker->randomNumber(3),
        'max_price'=> $faker->randomNumber(3),
        'description'=> $faker->text,
        'stock'=>$faker->boolean,
        'stock_qty' =>$faker->randomNumber(2),
        'onsale'=>$faker->boolean,

    ];
});
