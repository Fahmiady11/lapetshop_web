<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;


class TypeProController extends Controller
{
    
    public function data() 
    {
        $typepro = DB::table('type_of_product')->simplePaginate(5);


        //dd($pets);
        //return $product
        //return view('product.data', ['product' => $product]);
       // return view('product.data', compact('product'));
        return view('typepro.data')->with('typepro', $typepro);
    }

    public function add()
    {
        return view('typepro.add');
    }

    public function addproses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3'
        ]);

        DB::table('type_of_product')->insert([
            'TypeName' => $request ->name
        ]);
        return redirect('typepro')->with('status', 'Tipe Produk berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $typepro = DB::table('type_of_product')->where('IdType', $id)->first();
        //dd($pets);
        return view('typepro/edit', compact('typepro'));
    }

    public function editproses(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);
        $typepro = DB::table('type_of_product')->where('IdType', $id)
                ->update([
                    'TypeName' => $request ->name
                ]);
        return redirect('typepro')->with('status', 'Tipe Produk berhasil diedit!');
    }
    
    public function delete($id)
    {
        DB::table('type_of_product')->where('IdType', $id)->delete();
        return redirect('typepro')->with('status', 'Tipe Produk berhasil dihapus!');
    }
}
