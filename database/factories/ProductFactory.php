<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['Bánh canh', 'Bánh đa cua', 'Bún bò Huế', 'Bún bung', 'Bún cá', 'Bún chả', 'Bún chả cá', 'Bún chạo tôm', 'Bún đậu mắm tôm', 'Bún mắm', 'Bún mọc', 'Bún ốc', 'Bún riêu cua', 'Bún thịt nướng', 'Bún thang', 'Cao lầu', 'Hủ tiếu', 'Hủ tiếu', 'Mì Quảng']),
        'describe' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'purchase_price' => $faker->randomElement(['100000', '200000', '300000', '400000', '500000']),
        'sale_price' => $faker->randomElement(['100000', '200000', '300000', '400000', '500000']),
        'bua' => $faker->randomElement(['sáng', 'trưa', 'tối']),
        'img' => $faker->image($dir='public/assets/images/products', $width=60, $height=60,null, false),
        'unit' => $faker->randomElement(['thùng', 'đĩa', 'hộp']),
        'quantity' => $faker->numberBetween($min = 50, $max = 100),
        'category_id' => App\Models\Category::all()->random()->id,
        'bill_product_id' => App\Models\BillProduct::all()->random()->id,
    ];
});
