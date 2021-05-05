<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog\Product;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('catalog.products.index', compact('product'));
    }
}
