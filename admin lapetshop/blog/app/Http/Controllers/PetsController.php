<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class PetsController extends Controller
{
    public function data() 
    {
        $pets = DB::table('pets')->simplePaginate(5);
        //dd($pets);
        //return $product
        //return view('product.data', ['product' => $product]);
       // return view('product.data', compact('product'));
        return view('pets.data')->with('pets', $pets);
    }

    public function add()
    {
        return view('pets.add');
    }

    public function addproses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3'
        ]);

        DB::table('pets')->insert([
            'PetName' => $request ->name
        ]);
        return redirect('pets')->with('status', 'Hewan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pets = DB::table('pets')->where('id', $id)->first();
        //dd($pets);
        return view('pets/edit', compact('pets'));
    }

    public function editproses(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
        ]);
        $pets = DB::table('pets')->where('IdPet', $id)
                ->update([
                    'PetName' => $request ->name
                ]);
        return redirect('pets')->with('status', 'Hewan berhasil diedit!');
    }
    
    public function delete($id)
    {
        DB::table('pets')->where('IdPet', $id)->delete();
        return redirect('pets')->with('status', 'Hewan berhasil dihapus!');
    }
}
