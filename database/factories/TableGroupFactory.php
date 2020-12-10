7<?php

use Faker\Generator as Faker;

$factory->define(App\Models\TableGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Tầng 1', 'Tầng 2', 'Tầng 3', 'Tầng 4', 'Tầng 5', 'Tầng 6', 'Tầng 7', 'Tầng 8', 'Tầng 9', 'Tầng 10']),
    ];
});
