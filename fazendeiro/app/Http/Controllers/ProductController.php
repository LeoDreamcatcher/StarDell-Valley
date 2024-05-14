<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller{ 
    public function index(){
        $products = Product::all();
        return view('products.index', compact('products'));
}
    public function create(){
        return view('products.create');
}


    public function store(Request $request){

        $validatedData = $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required|numeric',

        ]);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->save();
        return redirect()->route('products.index');
}

    public function edit(Product $product){
        return view('products.edit', compact('product'));
}

    public function update(Request $request, Product $product){
        $product->update($request->all());
        return redirect()->route('products.index');
}

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index');
}
}