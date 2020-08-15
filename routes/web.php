<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TopController@index');


//ここからメーカー関係

Route::get('/manufacture/register_complete/', function () {
    return view('manufacture.register_complete');
});

Route::get('/manufacture/register_confirm/', function () {
    return view('manufacture.register_confirm');
});

Route::get('/manufacture/register_dashboard/', function () {
    return view('manufacture.register_dashboard');
});

Route::get('/manufacture/register_login/', function () {
    return view('manufacture.register_login');
});

Route::get('/manufacture/register/', function () {
    return view('manufacture.register');
});

Route::get('/manufacture/withdraw_complete/', function () {
    return view('manufacture.withdraw_complete');
});

Route::get('/manufacture/withdraw_confirm/', function () {
    return view('manufacture.withdraw_confirm');
});

//ここまでメーカー関係


//ここから商品関係

Route::get('/product/regiter_complete/', function () {
    return view('product.register_complete');
});

Route::get('/product/regiter_confirm/', function () {
    return view('product.register_confirm');
});

Route::get('/product/regiter_delete_complete/', function () {
    return view('product.register_delete_complete');
});

Route::get('/product/regiter_delete_confirm/', function () {
    return view('product.register_delete_confirm');
});

Route::get('/product/regiter_update/', function () {
    return view('product.register_update');
});

Route::get('/product/regiter/', function () {
    return view('product.register');
});

Route::get('/product/top/', function () {
    return view('product.top');
});

//ここまで商品関係


//ここからユーザー関係

Route::get('/user/introduce/', function () {
    return view('user.introduce');
});

Route::get('/user/register_complete/', function () {
    return view('user.register_complete');
});

Route::get('/user/register_confirm/', function () {
    return view('user.register_confirm');
});

Route::get('/user/register_dashboard/', function () {
    return view('user.register_dashboard');
});

Route::get('/user/register_login/', function () {
    return view('user.register_login');
});

Route::get('/user/register/', function () {
    return view('user.register');
});

Route::get('/user/withdraw_complete/', function () {
    return view('user.withdraw_complete');
});

Route::get('/user/withdraw_confirm/', function () {
    return view('user.withdraw_confirm');
});

//ここまでユーザー関係


//ここから固定ページ関係

Route::get('/information/form/', function () {
    return view('information.form');
});

Route::get('/promise/manufacture_rule/', function () {
    return view('promise.manufacture_rule');
});

Route::get('/promise/personal_data/', function () {
    return view('promise.personal_data');
});

Route::get('/promise/privacy_policy/', function () {
    return view('promise.privacy_policy');
});

Route::get('/promise/user_rule/', function () {
    return view('promise.user_rule');
});

Route::get('/password/reset/', function () {
    return view('password.reset');
});

//ここまで固定ページ関係
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => 'manufacture', 'middleware' => 'guest:manufacture'], function() {
    Route::get('/home', function () {
        return view('manufacture.home');
    });
    Route::get('login', 'Manufacture\LoginController@showLoginForm')->name('manufacture.login');
    Route::post('login', 'Manufacture\LoginController@login')->name('manufacture.login');
    Route::get('register', 'Manufacture\RegisterController@showRegisterForm')->name('manufacture.register');
    Route::post('register', 'Manufacture\RegisterController@register')->name('manufacture.register');
    Route::get('password/rest', 'Manufacture\ForgotPasswordController@showLinkRequestForm')->name('manufacture.password.request');
});
