<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function categoryindex() {   
        $categories = Category::all();
  
        return response()->json([
            "mesage" => "success", "categories" => $categories
        ]);
    }

    public function insert(Request $request)
    {
        $this->validate(
            $request,
            ['name' => 'required', 'descrbion' => 'required']
        );
        $category = new Category;
        $category->name = $request->name;
        $category->descrbion = $request->descrbion;
        $category->save();
        return response()->json(['message' => "success", "category" => $category], 200);
    }
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            ['name' => 'string|required', 'descrbion' => 'string|required']
        );
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->descrbion = $request->descrbion;
        $category->update();
        return response()->json(["message" => "success", "category" => $category], 200);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        //يوصلني لقاعدة البايانات
        if ($category != null || $category != '') {
            $category->delete();

            return response()->json(["message" => "success"], 200);
        } else {
            return response()->json(["message" => "fail"], 404);
        }

        //يحذف الapi 
    }

}
