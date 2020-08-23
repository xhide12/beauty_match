<?php

namespace App\Http\Controllers\Manufacture;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacture;
use Illuminate\Support\Facades\Auth;

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
        return view('manufacture.home',compact('manufacture'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

