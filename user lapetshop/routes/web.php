<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SuccessController;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('TugasPaw.home', ['user'=>Auth::user()]);
    });
    
    Route::get('/category/{identifier}', [CategoryController::class, 'index']);
    Route::get('/category/{idproduct}/add', [CategoryController::class, 'store']);
    Route::get('/category', [CategoryController::class, 'create']);
    
    Route::get('/search', SearchController::class);
    
    Route::get('/keranjang', [KeranjangController::class, 'index']);
    Route::get('/keranjang/{product}/destroy', [KeranjangController::class, 'destroy']);
    Route::post('/keranjang', [KeranjangController::class, 'store']);
    
    Route::get('/pembayaran', [PembayaranController::class, 'index']);
    Route::post('/pembayaran', [PembayaranController::class, 'store']);
    
    Route::get('/status', [StatusController::class, 'index']);
    
    Route::get('/success/{gambar}', SuccessController::class);
    
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::post('/profil', [ProfilController::class, 'store']);
    
    Route::get('/logout', LogoutController::class);
});


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
    
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

