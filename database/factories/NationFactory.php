<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nation;
use App\Models\Customer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Nation::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
    ];
});