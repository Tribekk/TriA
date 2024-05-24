<?php

namespace App\Http\Controllers;

use App\Filters\ProductFilter;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add (Request $request){
        $request->validate([
            'name' => 'required|max:255|string|unique:product',
            'price' => 'required|numeric|between:0,9999999.99',
            'measurement' => 'required|max:255|string'
        ]);

        $newProduct = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'measurement' => $request->measurement,
            'category_id' => $request->category_id,
        ]);

        return redirect(route('edit.product', ['product'=>$newProduct]));
    }

    public function edit (Request $request, Product $product){
        $request->validate([
            'name' => 'required|max:255|string|unique:products,name,' . $product->id,
            'price' => 'required|numeric|between:0,9999999.99',
            'measurement' => 'required|max:255|string'
        ]);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->measurement = $request->measurement;
        $product->category_id = $request->category_id;
        $product->save();

        return redirect(route('edit.product', ['product' => $product]));
    }

    public function delete (Product $product){
        $product->delete();

        return redirect(route('product'));
    }

    public function show (ProductFilter $request)
    {
        $products = Product::filter($request)->get();
        $categories = Category::all();
        return view('user.product', compact('products', 'categories'));
    }
}
