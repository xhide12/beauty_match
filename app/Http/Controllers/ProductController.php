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
        $product->image1 = $request->image1;
        $product->image1 = $request->image2;
        $product->image1 = $request->image3;
        $product->image1 = $request->image4;
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
