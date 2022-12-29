<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();

        return view('layouts.products', compact('products'));
    }


    public function index()
    {
        return view('components.shop.index', [
            'products' => Product::latest()->filter(
                request(['search', 'category', 'creator'])
            )->paginate(18)->withQueryString()
        ]);
    }

    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }
}
