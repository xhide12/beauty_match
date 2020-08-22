<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // Guardの認証方法を指定
    protected function guard()
    {
        return Auth::guard('user');
    }

    // 新規登録画面
    public function showRegisterForm()
    {
        return view('user.auth.register');
    }

    // バリデーション
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'line_id'    => ['string', 'max:255'],
            'salon_name'    => ['required', 'string', 'max:255'],
            'salon_url'    => ['string', 'max:255'],
            'business_form'    => ['required', 'integer', 'max:11'],
            'monthly_sales'    => ['string', 'max:255'],
            'living_area'    => ['required', 'integer', 'max:11'],
            'facebook_id'    => ['required', 'string', 'max:255'],
            'instagram_id'    => ['required', 'string', 'max:255'],
        ]);
    }

    // 登録処理
    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            'line_id'    => $data['line_id'],
            'salon_name'    => $data['salon_name'],
            'salon_url'    => $data['salon_url'],
            'business_form'    => $data['business_form'],
            'monthly_sales'    => $data['monthly_sales'],
            'living_area'    => $data['living_area'],
            'facebook_id'    => $data['facebook_id'],
            'instagram_id'    => $data['instagram_id'],
        ]);
    }
}
