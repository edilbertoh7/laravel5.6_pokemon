<?php

use Faker\Generator as Faker;

$factory->define(edy\Trainer::class, function (Faker $faker) {
    return [
       'name' => $faker->name,
    ];
});
