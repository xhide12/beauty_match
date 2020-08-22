<?php

namespace App\Http\Controllers\Manufacture\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/manufacture/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('guest:manufacture')->except('logout');
    // }
    public function showLoginForm()
    {
        return view('manufacture.auth.login');
    }

    // public function index()
    // {
    //     return view('manufacture.auth.login');
    // }


    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'email|required',
            'password' => 'required|min:4',
        ]);
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            return redirect()->route('/manufacture/home');//リダイレクト先は好きなところへ
        }else{
            return redirect()->back()->with('ログインに失敗しました');
        }
    }
    protected function guard()
    {
        return \Auth::guard('manufacture');
    }
    
    public function logout(Request $request)
    {
        Auth::guard('manufacture')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/manufacture/login');
    }
    
}
