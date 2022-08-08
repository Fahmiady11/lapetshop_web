<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth/login');
    }
    
    public function store(Request $request)
    {
        $request ->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        // $admins = Admin::Where('AdminName', $request->name)->get();
        $user=Admin::where('AdminName', $request->name)->first();

        if ($user) {
            if (Hash::check($request->password, $user->AdminPass)) {
                // return($user);
                Auth::login($user);
                return redirect('/')->with('status', 'login berhasil');
            }
            return redirect('login');
        }
        
        throw ValidationException::withMessages([
            'name'=>'nama salah'
        ]);
    }
}
