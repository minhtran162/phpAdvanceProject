<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $brandId = App\Models\Brand::pluck('id')->toArray();
    $nationId = App\Models\Nation::pluck('id')->toArray();
    $typeId = App\Models\Type::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'desc' => $faker->paragraph,
        'price' => $faker->numberBetween(100000, 100000000),
        'image' => $faker->imageUrl(),
        
        'brand_id' => $faker -> randomElement($brandId),
        'nation_id' => $faker -> randomElement($nationId),
        'type_id' => $faker -> randomElement($typeId),
        
    ];
});