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

    public function edit(int $product)
    {
        $products = Product::find($product);
        if ($products) {
            return view('products.edit', compact('products'));
        }
        return redirect()->route('products.index')->withErrors(['Produto não encontrato']);
    }

    public function update(int $product, RequestProduct $requestProduct)
    {
        $products = Product::find($product);
        if ($products) {
            $products->update($requestProduct->all());

            return redirect()->back()->with('success', 'Produto alterado com sucesso');
        }
        return redirect()->route('products.index')->withErrors(['Produto não encontrato']);
    }

    public function destroy(int $product)
    {
        $product = Product::find($product);
        if ($product) {
            $product->delete();
            return redirect()->route('products.index')->with('success', 'Produto deletado com sucesso!');
        }
        return redirect()->route('products.index')->withErrors(['Produto não encontrato']);
    }
}
