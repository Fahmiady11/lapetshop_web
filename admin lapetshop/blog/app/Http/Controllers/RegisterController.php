<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth/register');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|unique:admins,AdminName',
            'password' => 'required',
        ]);
        //return $request;

        $admins = new Admin([
            'AdminName' => $request->name,
            'AdminPass' => Hash::make($request->password),
        ]);
        $admins -> save();

        session()->put('key','value');
        return redirect('login')->with('status', 'Silahkan Login');
    }
}
