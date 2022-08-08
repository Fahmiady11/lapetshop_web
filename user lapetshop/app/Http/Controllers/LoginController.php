<?php

namespace App\Http\Controllers;

use App\Models\Buyers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('TugasPaw.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required', 'alpha_num', 'min:8']
        ]);
        $user = Buyers::where('Email', $request->email)->get()->first();
        if ($user) 
        {
            if ($user->UserPass==$request->password) {
                Auth::login($user);
                return redirect('/');
            }
            throw ValidationException::withMessages([ 'password' => 'Your password is wrong!']);
        }
 
        throw ValidationException::withMessages([ 'email' => 'Your e-mail is not available!', 'password' => 'Your password is wrong!']);
    }
}
