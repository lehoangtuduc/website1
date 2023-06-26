<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {

        $stores = store::all();
        return view('products.create',  compact('stores'));
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return redirect()->route('products.index', $product->id);
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(String $id)
    {
        $product = Product::find($id);
        $stores = store::all();
        return view('products.edit', compact('product','stores'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.show', $product->id);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = Product::where('product_name', 'like', "%$keyword%")->get();

        return response()->json($products);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
