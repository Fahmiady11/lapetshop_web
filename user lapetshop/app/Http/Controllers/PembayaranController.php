<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PembayaranController extends Controller
{
    public function index(Request $request)
    {
        return view('TugasPaw.pembayaran');
    }

    public function store(Request $request)
    {
        
        $idpurchase = $request->pembayaran;
        $request->validate([ 'bukti' => ['image', 'required', 'mimes:jpeg,png,jpg,gif,svg'] ]);
        $nama = time() . '.' . $request->bukti->extension();
        $image = Cart::where('IdPurchase', $idpurchase)->update([ 'ProofImage' => $nama ]);
        if ($image) {
            $request->bukti->move(public_path('img'), $nama);
            return redirect('/success' . '/' . $nama);
        }
        throw ValidationException::withMessages(['buktimessage'=>'Upload bukti is Failed!']);
        
    }
}
