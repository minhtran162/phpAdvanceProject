<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Nation;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $nations = Nation::all();
        $brands = Brand::all();
        $types = Type::all();
        return view('welcome', [
            'products' => $products,
            'nations' => $nations,
            'brands' => $brands,
            'types' => $types,

        ]);
    }
}
