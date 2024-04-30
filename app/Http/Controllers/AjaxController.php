<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    
    public function creatAjax(){


        return view('ceatAjax');
    }
    public function storAjax(Request $request ) {   
        $category = new Category();
        $category->name = $request->name;
        $category->descrbion = $request->descrbion;
        
        $category->save();
         return response()->json(["message" => "success"]);
            }
}
