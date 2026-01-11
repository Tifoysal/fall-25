<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        
        $allProducts = Product::all();

        return view('pages.product.list',compact('allProducts'));
    }


    public function create()
    {

        $categories= Category::all();
        
        return view('pages.product.create',compact('categories'));
    }

    public function store(Request $request)
    {

       Product::create([
            'name' => $request->product_name,
            'description' => $request->product_description,
            'price' => $request->product_price,
            'stock' => $request->product_stock,
            'stock' => $request->product_stock,
       ]);

       return redirect()->route('products.list');
        
    }
}
