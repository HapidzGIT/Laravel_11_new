<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);
        // dd($data);

        $newProduct = Product::create($data);

        return redirect(route('product.index'))->with('Success', 'Succes Update Product');
    }


    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',

        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('Success', 'Update Product');
    }

    public function destroy($id) {
        Product::destroy($id);
        return redirect(route('product.index'))->with('Success', 'Delete Product');
    }

}
