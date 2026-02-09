<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
     public function list()
     {

      $puddingBox = Category::paginate(10);

      return view('pages.category.list', compact('puddingBox'));   
     }


     public function createForm()
     {
        return view('pages.category.form');   
     }


     public function storeCategory(Request $request)
     {

      $validation=Validator::make($request->all(),[
         'c_name'=>'required',
         'c_description'=>'required',
      ]);

      if($validation->fails())
      {
         
         // Display a success toast with no title
         toastr()->error("Please fill all the fields correctly!");
         return redirect()->back();
      }



      // dd($request->all());
   //model function  - Eloquent ORM
   
    //insert into table_name value();

      Category::create([
         //bam pase column name => dan pase input field er name
         'name'=> $request->c_name,
         'description'=> $request->c_description,
         'status' => $request->status
      ]);


      return redirect()->route('category.list');

     }

     public function viewCategory($id)
     {

       $category= Category::find($id); 

      return view('pages.category.view', compact('category'));

     }
}
