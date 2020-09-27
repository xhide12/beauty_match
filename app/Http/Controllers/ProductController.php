<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacture;

class ProductController extends Controller
{
   public function add()
   {
    return view('product.register');
   }

   public function create(Request $request){
        $product = new Product;
        $product->brand = $request->brand;
        $product->product_name = $request->product_name;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->manufacture_id = $request->manufacture_id;

        if($request->file('image1')){
            $file = $request->file('image1');
            $file_name = $request->file('image1')->getClientOriginalName();
            $file_type = null;
            if($file->getClientMimeType() == "image/png"){
                $file_type = ".png";
            }elseif($file->getClientMimeType() == "image/jpg"){
                $file_type = ".jpg";
            }
        }
        $filePath = $request->file("image1")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image1 = str_replace('public/', '', $filePath);


        if($request->file('image2')){
            $file = $request->file('image2');
            $file_name = $request->file('image2')->getClientOriginalName();
            $file_type = null;
            if($file->getClientMimeType() == "image/png"){
                $file_type = ".png";
            }elseif($file->getClientMimeType() == "image/jpg"){
                $file_type = ".jpg";
            }
        }
        $filePath = $request->file("image2")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image2 = str_replace('public/', '', $filePath);


        if($request->file('image3')){
            $file = $request->file('image3');
            $file_name = $request->file('image3')->getClientOriginalName();
            $file_type = null;
            if($file->getClientMimeType() == "image/png"){
                $file_type = ".png";
            }elseif($file->getClientMimeType() == "image/jpg"){
                $file_type = ".jpg";
            }
        }
        $filePath = $request->file("image3")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image3 = str_replace('public/', '', $filePath);

        
        if($request->file('image4')){
            $file = $request->file('image4');
            $file_name = $request->file('image4')->getClientOriginalName();
            $file_type = null;
            if($file->getClientMimeType() == "image/png"){
                $file_type = ".png";
            }elseif($file->getClientMimeType() == "image/jpg"){
                $file_type = ".jpg";
            }
        }

        $filePath = $request->file("image4")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image4 = str_replace('public/', '', $filePath);


        $product->product_coment = $request->product_coment;
        $product->composition = $request->composition;
        $product->official_hp = $request->official_hp;      
        $product->official_instagram = $request->official_instagram;      
        $product->save();
        return redirect('/manufacture/home');
    }

    public function show(Request $request)
    {
        $product = Product::find($request->id);
        return view('product.show', ['product' => $product]);
    }

    public function index()
    {
        $products = Product::paginate(9);
        return view('product.top', ['products' => $products]);
    }


    public function edit(Request $request)
{
    $product = Product::find($request->id);
    return view('product.edit',compact('product'));
}

public function update(Request $request)
{
    $product = Product::find($request->id);
    $product->brand = $request->brand;
    $product->product_name = $request->product_name;
    $product->category = $request->category;
    $product->price = $request->price;
    $product->size = $request->size;
    $product->manufacture_id = $request->manufacture_id;

    if($request->file('image1')){
        $file = $request->file('image1');
        $file_name = $request->file('image1')->getClientOriginalName();
        $file_type = null;
        if($file->getClientMimeType() == "image/png"){
            $file_type = ".png";
        }elseif($file->getClientMimeType() == "image/jpg"){
            $file_type = ".jpg";
        }
        $filePath = $request->file("image1")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image1 = str_replace('public/', '', $filePath);
    }
 
    if($request->file('image2')){
        $file = $request->file('image2');
        $file_name = $request->file('image2')->getClientOriginalName();
        $file_type = null;
        if($file->getClientMimeType() == "image/png"){
            $file_type = ".png";
        }elseif($file->getClientMimeType() == "image/jpg"){
            $file_type = ".jpg";
        }
        $filePath = $request->file("image2")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image2 = str_replace('public/', '', $filePath);
    }

    if($request->file('image3')){
        $file = $request->file('image3');
        $file_name = $request->file('image3')->getClientOriginalName();
        $file_type = null;
        if($file->getClientMimeType() == "image/png"){
            $file_type = ".png";
        }elseif($file->getClientMimeType() == "image/jpg"){
            $file_type = ".jpg";
        }
        $filePath = $request->file("image3")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image3 = str_replace('public/', '', $filePath);
    }
    
    if($request->file('image4')){
        $file = $request->file('image4');
        $file_name = $request->file('image4')->getClientOriginalName();
        $file_type = null;
        if($file->getClientMimeType() == "image/png"){
            $file_type = ".png";
        }elseif($file->getClientMimeType() == "image/jpg"){
            $file_type = ".jpg";
        }
        $filePath = $request->file("image4")->storeAs('public/uploaded_image', $file_name . $file_type);
        $product->image4 = str_replace('public/', '', $filePath);
    }

    $product->product_coment = $request->product_coment;
    $product->composition = $request->composition;
    $product->official_hp = $request->official_hp;      
    $product->official_instagram = $request->official_instagram;      

    $product->save();
    return redirect('/manufacture/home');
}

public function delete(Request $request)
{
    $product = Product::find($request->id);
    return view('product.delete', ['product' => $product]); 
}

public function remove(Request $request)
{
    $product = Product::find($request->id);
    $product->delete();
    return redirect('/manufacture/home');
}


}
