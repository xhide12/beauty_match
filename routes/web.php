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

Route::get('/', 'TopController@index')->name('home');

Route::group(['prefix' => 'manufacture', 'middleware' => 'auth:manufacture'], function(){
    Route::get('/chat/{introduction_id}/', 'Manufacture\HomeController@chat_index')->name('manufacture_chat.index');
    Route::post('chat/create', 'Manufacture\HomeController@chat_create')->name('manufacture_chat.create');

    Route::get('/home', 'Manufacture\HomeController@index')->name('manufacture.home');
    Route::post('/logout', 'Manufacture\Auth\LoginController@logout')->name('manufacture.logout');
    Route::get('/edit', 'Manufacture\HomeController@edit')->name('manufacture.edit');
    Route::post('/edit', 'Manufacture\HomeController@update')->name('manufacture.update');
    Route::get('/delete', 'Manufacture\HomeController@delete')->name('manufacture_delete');
    Route::post('/remove', 'Manufacture\HomeController@remove')->name('manufacture_remove'); 

    Route::post('/home/introduction', 'Manufacture\HomeController@judge')->name('manufacture.introduction');

    Route::get('/product/register', 'ProductController@add')->name('product_add');
    Route::post('/product/register', 'ProductController@create')->name('product_create');

    Route::get('/product/edit', 'ProductController@edit')->name('product_edit');
    Route::post('/product/edit', 'ProductController@update')->name('product_update');
    
    Route::get('/product/delete', 'ProductController@delete')->name('product_delete');
    Route::post('/product/remove', 'ProductController@remove')->name('product_remove');

});

Route::group(['prefix' => 'user', 'middleware' => 'auth:user'], function(){

    Route::get('/chat/{introduction_id}/', 'User\HomeController@chat_index')->name('user_chat.index');
    Route::post('chat/create', 'User\HomeController@chat_create')->name('user_chat.create');

    Route::get('/home', 'User\HomeController@index')->name('user.home');
    Route::post('/logout', 'User\Auth\LoginController@logout')->name('user.logout');
    Route::get('/edit', 'User\HomeController@edit')->name('user.edit');
    Route::post('/edit', 'User\HomeController@update')->name('user.update');
    Route::get('/delete', 'User\HomeController@delete')->name('user_delete');
    Route::post('/remove', 'User\HomeController@remove')->name('user_remove'); 

    Route::post('/product/show', 'IntroductionController@store')->name('introduction_form');

    Route::get('/introduction', function () {
        return view('user.introduction');
    })->name('user.introduction');

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

Route::get('/product/top', 'ProductController@index')->name('product_index');
Route::get('/product/show', 'ProductController@show')->name('product_show');

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


//ここから問い合わせフォーム関係

//入力ページ
Route::get('contact', 'ContactController@index')->name('contact');

//確認ページ
Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');

//送信完了ページ
Route::post('contact/sent', 'ContactController@sent')->name('sent');


//ここまで問い合わせフォーム関係