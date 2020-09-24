<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Introduction;
use App\Models\Chat;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(Auth::id());
        $products = Product::with('user')->get();
        // $introductions = Introduction::with('user')->get();
        $introductions = Introduction::where('user_id', Auth::id())->get();
        return view('user.home',compact('user', 'products','introductions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user = User::find(Auth::id());
        return view('user.edit',compact('user'));
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
        $user = User::find(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->line_id = $request->line_id;
        $user->salon_name = $request->salon_name;
        $user->salon_url = $request->salon_url;
        $user->business_form = $request->business_form;
        $user->monthly_sales = $request->monthly_sales;
        $user->living_area = $request->living_area;
        $user->facebook_id = $request->facebook_id;
        $user->instagram_id = $request->instagram_id;
        $user->save();
        return redirect('/user/home');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->id);
        return view('user.delete', ['user' => $user]); 
    }
    
    public function remove(Request $request)
    {
        $user = User::find($request->id);
        $user->delete();
        return redirect('/');
    }

 /**
     * @return View
     */
    public function chat_index(Request $request)
    {
        $value = $request->input('introduction_id');
        $introduction = Introduction::find($value);
        $chats = Chat::where('user_chat', Auth::id())->where('manufacture_chat', $introduction->manufacture_id)->get();
 
        return view('channels.user_index',[
            "chats" => $chats,
            'introduction' => $introduction
        ]);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function chat_create(Request $request)
    {
        $chat = new Chat($request->all());
        $chat->save();
        event(new Chated($chat));

        return response()->json(['message' => '投稿しました。']);
    }

}

