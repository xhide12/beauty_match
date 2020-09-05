<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Product;


class TopController extends Controller
{

    public function index(){

        $products = Product::with('user')->get();
        return view('top',compact('products'));

    }
}