<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
   
    public function mydashbord() {

        return view('dashbord.layout.dashbord');
        
    }
    public function categoryindex() {   
        $categories = Category::paginate(5);
  
        return view('pages.catgory.index',compact('categories'));
    }
    public function categorycreat() {  //هاد شغله بس يعرض البيانات 
         return view('pages.catgory.creat');
    }
     
    public function categoryinsert(Request $request ) {   
       // return $request->descrbion;
        $category = new Category();
        $category->name = $request->name;
        $category->descrbion = $request->descrbion;
        
        $category->save();
        return redirect()->route('category.index');    }
    public function edit($id){

        $category =  Category::find($id);
        return view('pages.catgory.edit', compact('category')) ;

    }//update

    public function update(Request $request,$id){

      
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->descrbion = $request->descrbion;
        $category->update();

    }
    public function remove($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
    }

