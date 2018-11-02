<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
  return [
    'name' => $faker->words(3, true),
   
    'price' => $faker->randomFloat(2, 20.0, 10000.00),
    'description' => $faker->paragraph(4, true)
  ];
});