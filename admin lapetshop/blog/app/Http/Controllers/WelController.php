<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Buyer;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Pet;
use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class WelController extends Controller
{
    public function index()
    {
        $Admins = Admin::count();
        $buyers =  Buyer::count();
        $pets = Pet::count();
        $typepro = TypeProduct::count();
        $carts = Cart::with('buyer','admin')->count();
        $Products = Product::with('pet','typeproduct')->count();
        $cartitems = CartItem::with('cart', 'product')->count();
        // return $Admins;
        return view('welcome', compact('Admins','buyers','carts','cartitems','pets','Products','typepro'));
    }
}
