<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function store(Request $request){
        $bm = new Product();
        
        $bm->brand = $request->brand;
        $bm->product_name = $request->product_name;
        $bm->category = $request->category;
        $bm->manufacture = $request->manufacture;
        $bm->image1 = $request->image1;
        $bm->product_coment = $request->product_coment;
        $bm->composition = $request->composition;
        $bm->official_hp = $request->official_hp;      
        $bm->official_instagram = $request->official_instagram;      
        
        $bm->save();
        return redirect('/user/home');
    }

}
