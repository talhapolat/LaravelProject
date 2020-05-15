<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/collection/', 'HomeController@collection')->name('collection');
Route::get('/category/{slug_category}', 'CategoryController@index')->name('index');
Route::get('/product/{slug_product}', 'ProductController@index')->name('product');
Route::get('/cart', 'BasketController@index')->name('basket');
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@userlogin')->name('userlogin');
Route::post('/register', 'LoginController@register')->name('register');
Route::get('/confirmation', 'LoginController@activation')->name('activation');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/account', 'AccountController@index')->name('account');
    Route::post('/logout', 'LoginController@userlogout')->name('logout');
});

Route::get('/test/mail', function () {
    $user = App\User::all()->find(5);
    return new App\Mail\UserRegistrationMail($user);
});
