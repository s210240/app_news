<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'header' => $faker->sentence,
        'content' => $faker->realText(),
        'category_id' => $faker->numberBetween(1, 4),
    ];
});
