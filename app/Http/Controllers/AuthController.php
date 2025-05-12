<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function doLogin(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (
            Auth::attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])
        ) {
            if (Auth::user()->role == 'admin') {
                return redirect('/categories');
            } elseif (Auth::user()->role == 'member') {
                return redirect('/');
            }
            else{
                abort(403);
            }
        }
        return view('login', ['login_error' => 'Invalid info']);
    }
}
