<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Product;


class TopController extends Controller
{

    public function index(){

        $users = User::find(Auth::id());
        $products = Product::with('user')->get();
        return view('top',compact('users', 'products'));

    }
}