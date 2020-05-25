<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\OrderDetail;
use Faker\Generator as Faker;

$factory->define(OrderDetail::class, function (Faker $faker) {
    $orderId = App\Models\Order::pluck('id')->toArray();
    $productId = App\Models\Product::pluck('id')->toArray();
    $customerId = App\Models\Customer::pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'price' => 100,
        'quantity' => 1,
        'total' => 1000000,
        'order_id' => $faker->randomElement($orderId),
        'product_id' => $faker->randomElement($productId),
        'customer_id' => $faker->randomElement($customerId)
    
    ];
});
