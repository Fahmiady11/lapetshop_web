<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        // $request->validate([ 'search' => ['alpha', 'max:25'] ]);
        $products = Products::where('ProductName', 'LIKE', '%'.$request->search.'%')->get();
        // dd($request->search);
        return view('TugasPaw.search', [
            'products' => $products,
            'filter' => $request->search
        ]);

        
        
    }
    
}
