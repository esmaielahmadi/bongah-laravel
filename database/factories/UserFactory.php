<?php

use Faker\Generator as Faker;



$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Banner::class, function (Faker $faker) {
    return [
        'street' => $faker->streetAddress,
        'city' => $faker->city,
        'zip' => $faker->postcode,
        'state' => $faker->state,
        'country' => $faker->country,
        'price' => $faker->numberBetween(10000,50000),
        'description' => $faker->paragraph(3, true)

    ];
});
