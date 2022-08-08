<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\Product;

class CartItemController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartitems = CartItem::with('cart', 'product')->simplePaginate(5);
        return view('cartitem/index', compact('cartitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cart = Cart::all();
        $product = Product::all();
        return view('cartitem/create', compact('cart','product'));
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
            'beli' => 'required',
            'produk' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);
        $cartitems = new CartItem([
            'IdPurchase' => $request->beli,
            'Idproduct' => $request->produk,
            'Amount' => $request->jumlah,
            'Price' => $request->harga,
        ]);
        $cartitems -> save();

        return redirect('cartitem')->with('status', 'Keranjang Item berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function show(CartItem $cartitem)
    {
        return view('cartitem/show', compact('cartitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function edit(CartItem $cartitem)
    {
        $cart = Cart::all();
        $product = Product::all();
        return view('cartitem/edit', compact('cart','product','cartitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartItem $cartitem)
    {
        $request->validate([
            'beli' => 'required',
            'produk' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
        ]);
        CartItem::where('IdPurchase', $cartitem->IdPurchase)
                ->update([
                    'IdPurchase' => $request->beli,
                    'Idproduct' => $request->produk,
                    'Amount' => $request->jumlah,
                    'Price' => $request->harga,
                ]);
        
        return redirect('cartitem')->with('status', 'Keranjang item berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartItem $cartitem)
    {
        $cartitem -> delete();
        
        return redirect('cartitem')->with('status', 'Keranjang Item berhasil dihapus!');
    }
}
