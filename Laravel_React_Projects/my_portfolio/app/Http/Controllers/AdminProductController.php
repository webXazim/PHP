<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store()
    {

        Product::create(array_merge($this->validatePost(), [
            'user_id' => request()->user()->id,
            'image' => request()->file('image')->store('image')
        ]));

        return redirect('/shop');
    }
    public function edit(Product $product)
    {
        return view('admin.products.edit', ['product' => $product]);
    }

    public function update(Product $product)
    {
        $attributes = $this->validatePost($product);

        if ($attributes['image'] ?? false) {
            $attributes['image'] = request()->file('image')->store('image');
        }

        $product->update($attributes);

        return back()->with('success', 'Post Updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back()->with('success', 'Post Deleted!');
    }

    protected function validatePost(?Product $product = null): array
    {
        $product ??= new Product();

        return request()->validate([
            'name' => 'required',
            'image' => $product->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('products', 'slug')->ignore($product)],
            'excerpt' => 'required',
            'price' => 'required',
            'off' => 'required',
            'pvl' => 'required',
            'description' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')],
        ]);
    }
}
