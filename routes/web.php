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

// Route::get('/', 'TopController@index');


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

// Route::get('/manufacture/register/', function () {
//     return view('manufacture.register');
// });

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

Route::get('/product/register', 'ProductController@add')->name('product_add');
Route::post('/product/register', 'ProductController@create')->name('product_create');

Route::get('/product/top', 'ProductController@index')->name('product_index');

Route::get('/product/edit', 'ProductController@edit')->name('product_edit');
Route::post('/product/edit', 'ProductController@update')->name('product_update');


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


// Auth::routes();
// Route::get('/', 'User\Auth\LoginController@index')->name('home');
Route::get('/', 'TopController@index');

Route::group(['prefix' => 'manufacture', 'middleware' => 'auth:manufacture'], function(){
    Route::get('/home', 'Manufacture\HomeController@index')->name('manufacture.home');
    Route::post('/logout', 'Manufacture\Auth\LoginController@logout')->name('manufacture.logout');
    Route::get('/edit', 'Manufacture\HomeController@edit')->name('manufacture.edit');
    Route::post('/edit', 'Manufacture\HomeController@update')->name('manufacture.update');
    Route::get('/delete', 'Manufacture\HomeController@delete')->name('manufacture_delete');
    Route::post('/remove', 'Manufacture\HomeController@remove')->name('manufacture_remove'); 
});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function(){
    Route::get('/home', 'User\HomeController@index')->name('user.home');
    Route::post('/logout', 'User\Auth\LoginController@logout')->name('user.logout');
    Route::get('/edit', 'User\HomeController@edit')->name('user.edit');
    Route::post('/edit', 'User\HomeController@update')->name('user.update');
    Route::get('/delete', 'User\HomeController@delete')->name('user_delete');
    Route::post('/remove', 'User\HomeController@remove')->name('user_remove'); 
});

Route::group(['prefix' => 'manufacture', 'middleware' => 'guest:manufacture'], function() {
    Route::get('/login', 'Manufacture\Auth\LoginController@showLoginForm')->name('manufacture.login');
    Route::post('/login', 'Manufacture\Auth\LoginController@login')->name('manufacture.login2');
    Route::get('/register', 'Manufacture\Auth\RegisterController@showRegisterForm')->name('manufacture.register');
    Route::post('/register', 'Manufacture\Auth\RegisterController@register')->name('manufacture.register1');
    Route::get('/password/rest', 'Manufacture\Auth\ForgotPasswordController@showLinkRequestForm')->name('manufacture.password.request');
});

Route::group(['prefix' => 'user', 'middleware' => 'guest:user'], function() {
    Route::get('/login', 'User\Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('/login', 'User\Auth\LoginController@login')->name('user.login');
    Route::get('/register', 'User\Auth\RegisterController@showRegisterForm')->name('user.register');
    Route::post('/register', 'User\Auth\RegisterController@register')->name('user.register');
    Route::get('/password/rest', 'User\Auth\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
});