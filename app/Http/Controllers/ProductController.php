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
            'category_id' => $request->category_id,
            'description' => $request->product_description,
            'price' => $request->product_price,
            'stock' => $request->product_stock,
            'stock' => $request->product_stock,
       ]);

       notify()->success()->title('⚡️ Product Created Successfully.')->send();

       return redirect()->route('products.list');
        
    }


    public function delete($id)
    {

        // find - used to find specific data by PK 
        Product::find($id)->delete();

        notify()->success()->title('⚡️ Product Deleted Successfully.')->send();
        return redirect()->back();


    }

    public function viewProduct($id) 
    {

        $product= Product::find($id);

        return view('pages.product.view', compact('product'));
        
    }
}
