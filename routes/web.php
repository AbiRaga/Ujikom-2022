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

Route::get('/', 'UserController@home')->name('home');
Route::get('/detail{produk}', 'UserController@detail')->name('pelanggan.detail');


Route::get('/login', 'usercontroller@login')->name('login');
Route::post('/postLogin', 'userController@postLogin')->name('postLogin');

Route::middleware('auth')->group(function () {
    Route::get('logout', 'UserController@logout')->name('logout');
    Route::post('/postkeranjang/{produk}', 'UserController@postkeranjang')->name('pelanggan.postkeranjang');
    Route::get('/keranjang', 'UserController@keranjang')->name('pelanggan.keranjang');
});
