<?php

namespace App\Http\Controllers;

use App\Models\Baskets;
use App\Models\Cart;
use App\Models\CartItems;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index()
    {
        $user = Auth::user()->IdUser;
        $items = Baskets::where('IdUser', $user)->with('products')->get();
        return view('TugasPaw.keranjang',[ 'items'=> $items]);
    }

    public function store(Request $request)
    {
        $date = Carbon::now()->toDateString();
        $user = Auth::user()->IdUser;
        $data = Cart::create([
            'DatePurchase' => $date,
            'Buyer' => $user,
            'PaymentStatus' => 0,
            'EstimateDelivery' => $date
        ]);
        if ($data) {
            $cart = DB::getPdo()->lastinsertId();
            foreach ($request->daftar as $product) {
                $amount = $request->jumlah[array_search($product, $request->idproduct)];
                $price = Products::where('IdProduct', $product)->get('Price')->first();
                $data = CartItems::create([
                    'cart_IdPurchase' => $cart,
                    'IdProduct' => $product,
                    'Amount' => $amount,
                    'Price' => $price->Price
                ]);
            }
            if ($data) {
                return redirect('/pembayaran')->with('pembayaran', $cart);
            }
        }
        // dd(Products::where('IdProduct', 5)->get('Price')->first());
        // return redirect('/pembayaran');
    }

    public function destroy($product)
    {
        $user = Auth::user()->IdUser;
        $delete = Baskets::where('IdUser', $user)->where('IdProduct', $product)->delete();
        if ($delete) {
            return back();
        }
    }
}
