<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Table::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Bàn 1', 'Bàn 2', 'Bàn 3', 'Bàn 4', 'Bàn 5', 'Bàn 6', 'Bàn 7', 'Bàn 8', 'Bàn 9', 'Bàn 10']),
        'status' => $faker->numberBetween($min = 0, $max = 2),
        'table_group_id' => App\Models\TableGroup::all()->random()->id,
        'number_slot' => $faker->numberBetween($min = 4, $max = 8),
    ];
});
