<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function store(Request $request)
    {
        $products = new Product();
        $products->name = $request->name;
        $products->price = $request->price;
        $products->save();
        return response()->json('Create Success!!!');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json($product);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->update();
        return response()->json('Update Success!!!');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json('Delete Success!!!');
    }
}
