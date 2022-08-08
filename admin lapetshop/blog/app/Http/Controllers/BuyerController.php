<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        $buyers =  Buyer::simplePaginate(5);
        //return $users;
        return view('buyer/index', compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buyer/create');
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
            'name' => 'required|min:3',
            'sex' => 'required',
            'pw' => 'required',
            'icon' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        //return $request;

        $buyer = new Buyer([
            'UserName' => $request->name,
            'Email' => $request->email,
            'Icon' => $request->icon,
            'UserPass' => $request->pw,
            'Sex' => $request->sex,
            'Phone' => $request->phone,
            'Address' => $request->address,
        ]);
        $buyer -> save();

        return redirect('buyer')->with('status', 'Pembeli berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer $buyer)
    {
        return view('buyer/show', compact('buyer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer $buyer)
    {
        //return $buyer;
        return view('buyer/edit', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer $buyer)
    {
        $request->validate([
            'name' => 'required|min:3',
            'sex' => 'required',
            'pw' => 'required',
            'icon' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        Buyer::where('IdUser', $buyer->IdUser)
                ->update([
                    'Username' => $request->name,
                    'Email' => $request->email,
                    'Icon' => $request->icon,
                    'UserPass' => $request->pw,
                    'Sex' => $request->sex,
                    'Phone' => $request->phone,
                    'Address' => $request->address,
                ]);

        return redirect('buyer')->with('status', 'Pembeli berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer $buyer)
    {
        //cara1
        //$buyer -> delete();

        //cara2
        // Buyer::destroy($buyer->IdUser);

        //cara 3
        Buyer::where('IdUser', $buyer->IdUser)->delete();

        return redirect('buyer')->with('status', 'Pembeli berhasil dihapus!');
    }
}
