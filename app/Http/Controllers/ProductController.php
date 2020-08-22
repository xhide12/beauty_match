<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function store(Request $request){
        $fw = new Product();
        
        $fw->brand = $request->brand;
        $fw->product_name = $request->product_name;
        $fw->category = $request->category;
        $fw->manufacture = $request->manufacture;
        $fw->image1 = $request->image1;
        $fw->product_coment = $request->product_coment;
        $fw->composition = $request->composition;
        $fw->official_hp = $request->official_hp;      
        $fw->official_instagram = $request->official_instagram;      
        
        $fw->save();
        return redirect('/user/home');
    }

}
