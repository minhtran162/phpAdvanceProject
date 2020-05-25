<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    $ID = App\Models\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($ID)
    ];
});
