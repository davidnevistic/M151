<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        dd(\App\Models\Product::all());
    }

    public function product()
    {
        dd();
    }

    public function list()
    {
        $products = \App\Models\Product::all();
        echo "<pre>";

        return view('products', ['products' => $products]);
    }

    public function detail($id)
    {
        $product = \App\Models\Product::find($id);
        return view('detail', ['product' => $product]);
    }
}
