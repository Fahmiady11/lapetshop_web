<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function index()
    {
        $user = Auth::user()->IdUser;
        $carts = Cart::with('cartitems')->where('Buyer', $user) ->get();
        // dd($carts);
        return view('TugasPaw.status',[ 'carts'=> $carts]);
    }
    
}
