<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Buyer;
use App\Models\Admin;
use Illuminate\View\ViewServiceProvider;

class CartController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::with('buyer','admin')->simplePaginate(5);
        
        // return $carts;
        return view('cart/index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $buyer = Buyer::all();
        $admin = Admin::all();
        return view('cart/create', compact('buyer', 'admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tglbeli' => 'required',
            'bayar' => 'required',
            'barang' => 'required',
            'tiba' => 'required',
            'bukti' => 'required',
            'admin' => 'required',
        ]);
        // return $request;
        $cart = new Cart([
            'Buyer' => $request->nama,
            'DatePurchase' => $request->tglbeli,
            'PaymentStatus' => $request->bayar,
            'DeliveryStatus' => $request->barang,
            'EstimateDelivery' => $request->tiba,
            'ProofImage' => $request->bukti,
            'IdAdmin' => $request->admin,
        ]);
        $cart -> save();

        return redirect('cart')->with('status', 'Keranjang berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        return view('cart/show',compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        $buyer = Buyer::all();
        $admin = Admin::all();
        return view('cart/edit', compact('cart','buyer', 'admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $request->validate([
            'nama' => 'required',
            'tglbeli' => 'required',
            'bayar' => 'required',
            'barang' => 'required',
            'tiba' => 'required',
            'bukti' => 'required',
            'admin' => 'required',
        ]);
        Cart::where('IdPurchase', $cart->IdPurchase)
        ->update([
            'Buyer' => $request->nama,
            'DatePurchase' => $request->tglbeli,
            'PaymentStatus' => $request->bayar,
            'DeliveryStatus' => $request->barang,
            'EstimateDelivery' => $request->tiba,
            'ProofImage' => $request->bukti,
            'IdAdmin' => $request->admin,
        ]);

        return redirect('cart')->with('status', 'Keranjang berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart -> delete();
        
        return redirect('cart')->with('status', 'Keranjang berhasil dihapus!');
    }
}
