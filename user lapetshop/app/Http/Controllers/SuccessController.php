<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function __invoke($gambar)
    {
        $succes = Cart::where('ProofImage', $gambar)->get()->first();
        if ($succes) {
            return view('TugasPaw.success');
        } else {
            return redirect('/status');
        }
    }
}
