<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show()
    {
        return 'oi 1';
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(RequestProduct $requestProduct)
    {
        $product = new Product();

        $product->name = $requestProduct->name;
        $product->description = $requestProduct->description;
        $product->price = $requestProduct->price;
        $product->quantity = $requestProduct->quantity;

        if ($product->save()) {
            return redirect()->route('products.index');
        }

        return redirect()->route('products.create')
            ->withErrors($product);
    }

    public function edit(int $id)
    {
        return 'oi 2';
    }

    public function update()
    {
        return 'oi 3';
    }

    public function destroy(int $id)
    {
        return 'oi 4';
    }
}
