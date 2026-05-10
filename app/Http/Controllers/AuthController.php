<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /*
    |------------------------------------------------------------------
    | Halaman Login
    |------------------------------------------------------------------
    */

    public function login()
    {
        return view('login');
    }

    /*
    |------------------------------------------------------------------
    | Proses Login
    |------------------------------------------------------------------
    */

    public function loginProses(Request $request)
    {
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            return redirect('/dashboard');
        }

        return redirect('/login')
            ->with('error', 'Email atau Password salah');
    }

    /*
    |------------------------------------------------------------------
    | Halaman Register
    |------------------------------------------------------------------
    */

    public function register()
    {
        return view('register');
    }

    /*
    |------------------------------------------------------------------
    | Proses Register
    |------------------------------------------------------------------
    */

    public function registerProses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')
            ->with('success', 'Register berhasil');
    }

    /*
    |------------------------------------------------------------------
    | Logout
    |------------------------------------------------------------------
    */

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}