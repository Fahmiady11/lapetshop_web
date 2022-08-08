<?php

namespace App\Http\Controllers;

use App\Models\Buyers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('TugasPaw.profil', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:buyers,Email'],
            'password' => ['required', 'min:8', 'alpha_num'],
            'password2' => ['required', 'min:8', 'alpha_num',' same:password']
        ]);

        $updated = Buyers::where('IdUser', $request->id)->update([
            'UserName' => $request->nama,
            'Email' => $request->email,
            'UserPass' => $request->password
        ]);
        if($updated) {
            return redirect('/profil')->with('updatemessage', 'Your profile has been changed');
        }

    }
}
