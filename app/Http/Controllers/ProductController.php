<?php

namespace App\Http\Controllers;
use App\Models\Category;

use App\Models\Prodect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {
        $products = Prodect::all();
        return view('pages.product.index', compact('products'));
    }
    public function show()
    {
        $products = Prodect::all();
        return view('pages.product.show', compact('products'));
    }
    
    public function productcreat() {  //هاد شغله بس يعرض البيانات 
      //  $products = Prodect::all();
      $categories = Category::all();
        return view('pages.product.creat',compact('categories'));
    }
    public function productinsert(Request $request){//الريكويست يجيب البيانات من الصفخة
        $products = new Prodect();
    
        //مامخلي الالحقول بالداتابيس بشكل صحيح
        /// اكيد يطلعلك ايرور
        $products->category_id = $request->category_id;
    
        $products->productname = $request->productname;
        //contry	هاد الكود يربط بين الفرونت والباك 
        $products->contry = $request->contry;
        //$products->detail
        if($request->file('image')){
           
            $image =$request->file('image');
            
            $filename= time().'_'.$image->getClientOriginalName();
            $filename =str_replace(' ','-',$filename);
            $image  ->move('images/product',$filename);
            $products->image = 'product'.'/' .$filename ;
            //product
        }
        //price
        $products->price = $request->price;
        $products->color = $request->color;
        $products->descrbion = $request->descrbion;
        $products->save();
        return 'insert';
    }
    public function edit($id) {
        $categories = Category::all();
        $product = Prodect::find($id);
        return view('pages.product.edit', compact('product', 'categories'));
    }
    
    public function update(Request $request, $id) {
        $product = Prodect::find($id);
    
        // تحديث بيانات المنتج باستخدام البيانات المرسلة من النموذج
        $product->productname = $request->productname;
        $product->descrbion = $request->descrbion;
        $product->contry = $request->contry;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->category_id = $request->category_id;
        



        

        // تحديث بقية الحقول الأخرى هنا
    
        $product->update();
    
        return 'update';
    }
      
    public function remove($id) {
        $product = Prodect::find($id);
      
        $dest ='imges/'.$product->image;
      

        if(File::exists($dest)){  
         File::delete($dest); 
        }
        $product->delete();
    }    

}
