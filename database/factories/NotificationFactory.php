<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notification;
use Faker\Generator as Faker;

$factory->define(Notification::class, function (Faker $faker) {
    return [
        'title'=> $faker->title,
        'body'=> $faker->text,
        'type'=> array_rand(['success', 'danger', 'primary', 'secondary'])
    ];
});
