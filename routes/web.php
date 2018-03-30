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

Route::get('/', function () {
    return redirect('blog/');
});

Route::get('blog', 'Blog@index');

Route::get('category', 'Category@index');
Route::get('category/add', function(){
    return view('category.add');
})->middleware('auth');
Route::post('category/add', ['as'=>'categoryAdd','uses'=>'Category@add'])->middleware('nameToUpper');

Route::get('user/login', 'Auth\LoginController@login');

Route::post('user/login', ['as'=>'login', 'uses'=>'Auth\LoginController@loginUser']);

Route::get('user/register', 'Auth\RegisterController@register');

Route::post('user/register', ['as'=>'register', 'uses'=>'Auth\RegisterController@registerUser']);
Route::post('logout', ['as'=>'logout', 'uses'=>'Auth\LogoutController@logout']);

Route::get('/home', 'HomeController@index')->name('home');
