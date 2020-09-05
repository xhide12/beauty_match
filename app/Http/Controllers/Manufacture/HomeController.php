<?php

namespace App\Http\Controllers\Manufacture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacture;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:manufacture');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $manufacture = Manufacture::find(Auth::id());
        $products = Product::with('manufacture')->get();
        return view('manufacture.home',compact('manufacture', 'products'));


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $manufacture = Manufacture::find(Auth::id());
        return view('manufacture.edit',compact('manufacture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $manufacture = Manufacture::find(Auth::id());
        $manufacture->name = $request->name;
        $manufacture->email = $request->email;
        $manufacture->company_name = $request->company_name;
        $manufacture->department_name = $request->department_name;
        $manufacture->phone = $request->phone;
        $manufacture->save();
        return redirect('/manufacture/home');
    }

    public function delete(Request $request)
    {
        $manufacture = Manufacture::find($request->id);
        return view('manufacture.delete', ['manufacture' => $manufacture]); 
    }
    
    public function remove(Request $request)
    {
        $manufacture = Manufacture::find($request->id);
        $manufacture->delete();
        return redirect('/');
    }

}

