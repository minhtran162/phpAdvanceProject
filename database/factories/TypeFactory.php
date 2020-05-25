<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Type;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Type::class, function (Faker $faker) {
    return [
        'name' => $faker->title,
    ];
});