<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        
        // $products = Product::all();

        return view('pages.product.list');
    }


    public function create()
    {

        $categories= Category::all();
        
        return view('pages.product.create',compact('categories'));
    }
}
