<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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

/* Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{productID}', [ProductController::class, 'index']);
}); */

Route::middleware('auth')->group(function ()
{
    Route::get('/', 'App\Http\Controllers\WelController@index');

    //tabel pet
    Route::get('pets', 'App\Http\Controllers\PetsController@data');
    Route::get('pets/add', 'App\Http\Controllers\PetsController@add');
    Route::post('pets', 'App\Http\Controllers\PetsController@addProses');
    Route::get('pets/edit/{id}', 'App\Http\Controllers\PetsController@edit');
    Route::patch('pets/{id}', 'App\Http\Controllers\PetsController@editproses');
    Route::delete('pets/{id}', 'App\Http\Controllers\PetsController@delete');

    //tabel tipe produk
    Route::get('typepro', 'App\Http\Controllers\TypeProController@data');
    Route::get('typepro/add', 'App\Http\Controllers\TypeProController@add');
    Route::post('typepro', 'App\Http\Controllers\TypeProController@addProses');
    Route::get('typepro/edit/{id}', 'App\Http\Controllers\TypeProController@edit');
    Route::patch('typepro/{id}', 'App\Http\Controllers\TypeProController@editproses');
    Route::delete('typepro/{id}', 'App\Http\Controllers\TypeProController@delete');

    //tabel buyer
    Route::resource('buyer', BuyerController::class);

    //tabel admin
    Route::resource('admin', AdminController::class);

    //tabel cart
    Route::resource('cart', CartController::class);

    //tabel cart item
    Route::resource('cartitem', CartItemController::class);

    //tabel produk
    Route::resource('product', ProductController::class);

    Route::post('logout', LogoutController::class)->name('logout');
});

Route::middleware('guest')->group(function (){
    Route::get('register', [RegisterController::class, 'create'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register');
    Route::get('login',[LoginController::class, 'create'])->name('login');
    Route::post('login',[LoginController::class, 'store'])->name('login');
});