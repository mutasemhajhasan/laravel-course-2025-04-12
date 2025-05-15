<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        if (Auth::user()->can('create cat')  ) {
                return redirect('/categories');
            } else {
                return redirect('/');
            }

        }
        return view('login', ['login_error' => 'Invalid info']);
    }

    public function register(Request $request){
        $user=User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
            ]
            );
            $user->assignRole('member');
            return redirect(route('login'));
    }

    public function createRegister(Request $request){
        return view('register');
    }

}
