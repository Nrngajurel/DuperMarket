<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'uuid'=>$faker->uuid,
        'name'=>'Product XA-'.$faker->randomNumber(5),
        'description'=>$faker->unique()->text,
        'on_sale'=>$faker->boolean,
        'stock_qty'=>$faker->randomNumber(3),
        'min_price'=>random_int(400,500),
        'max_price'=>random_int(600,900),
        'details'=> $faker->text,
        'created_at'=>now()->subHours(random_int(1,100)),
    ];
});
