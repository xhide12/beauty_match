<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    // public function store(Request $request){
    //     $product = new Product();
        
    //     $product->brand = $request->brand;
    //     $product->product_name = $request->product_name;
    //     $product->category = $request->category;
    //     $product->manufacture = $request->manufacture;
    //     $product->image1 = $request->image1;
    //     $product->product_coment = $request->product_coment;
    //     $bmproduct->composition = $request->composition;
    //     $product->official_hp = $request->official_hp;      
    //     $product->official_instagram = $request->official_instagram;      
        
    //     $bm->save();
    //     return redirect('/product/top');
    // }

   public function add()
   {
    return view('product.register');
   }

   public function create(Request $request){
        $product = new Product;
        $product->brand = $request->brand;
        $product->product_name = $request->product_name;
        $product->category = $request->category;
        $product->manufacture = $request->manufacture;

        if($request->file('image1')){
            $file = $request->file('image1');
            $file_name = $request->file('image1')->getClientOriginalName();
            $file_type = null;
            var_dump($file);
            if($file->getClientMimeType() == "image/png"){
                $file_type = ".png";
            }elseif($file->getClientMimeType() == "image/jpng"){
                $file_type = ".jpg";
            }
        }

        $filePath = $request->file("image1")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image1 = str_replace('public/', '', $filePath);


        // $product->image1 = $request->image1;
        $product->image2 = $request->image2;
        $product->image3 = $request->image3;
        $product->image4 = $request->image4;
        $product->product_coment = $request->product_coment;
        $product->composition = $request->composition;
        $product->official_hp = $request->official_hp;      
        $product->official_instagram = $request->official_instagram;      
        $product->save();
        return redirect('/product/top');
    }

    public function index()
    {
        $products = Product::all();
        return view('product.top', ['products' => $products]);
    }

}
