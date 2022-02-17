<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        dd(\App\Models\Product::all());
    }
    public function product(){
        dd($id);
    }
}
