<?php

namespace App\Http\Controllers;

use App\Models\Buyers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('TugasPaw.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:30'],
            'email' => ['required', 'email', 'unique:buyers,Email'],
            'password' => ['required', 'min:8', 'alpha_num'],
            'passwordConfirm' => ['required', 'min:8', 'alpha_num',' same:password'],
        ]);

        $user = Buyers::create([
            'UserName' => $request->nama,
            'Email' => $request->email,
            'UserPass' => $request->password,
            'Icon' => 'userr-01.png',
            'Sex' => 'L'
        ]);
        if ($user) {
            return redirect('/login');
        }
        
    }
}
