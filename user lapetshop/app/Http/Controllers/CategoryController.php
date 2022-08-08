<?php

namespace App\Http\Controllers;

use App\Models\Baskets;
use App\Models\Products;
use App\Models\TypeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class CategoryController extends Controller
{
    public function index($identifier)
    {
        $id = TypeProduct::where('TypeName', $identifier)->get('IdType')->first();
        $product = Products::where('IdProductType', $id->IdType)->get();
        $identifier = Str::ucfirst($identifier);
        return view('TugasPaw.category', ['type'=>$identifier, 'products' => $product]);
    }

    public function create()
    {
        $makanan = Products::where('IdProductType', '1')->get();
        $obat = Products::where('IdProductType', '2')->get();
        $mainan = Products::where('IdProductType', '3')->get();
        $aksesoris = Products::where('IdProductType', '4')->get();
        $perawatan = Products::where('IdProductType', '5')->get();
        $collection =[
            'Makanan' => $makanan,
            'Obat' => $obat,
            'Mainan' => $mainan,
            'Aksesoris' => $aksesoris,
            'Perawatan' => $perawatan
        ];
        // dd($collection);
        return view('TugasPaw.category', [ 'collection' => $collection ]);
    }

    public function store($idproduct)
    {
        $user = Auth::user()->IdUser;
        $product = Products::where('IdProduct', $idproduct)->get()->first();
        if ($product) {
            $product = Baskets::where('IdUser', $user)->where('IdProduct', $idproduct)->get()->first();
            if (!$product) {
                $basket = Baskets::create([
                    'IdUser' => $user,
                    'IdProduct' => $idproduct
                ]);
                if ($basket) {
                    return redirect('/keranjang');
                }
            } else {
                return back()->with('producteror', 'You have ordered the product!');
            }

        }
    }
}
