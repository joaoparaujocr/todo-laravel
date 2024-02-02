<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login() {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('login');
    }

    public function register() {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('register');
    }

    public function registerStore(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6|confirmed"
        ]);

        $data = $request->only(['name', 'email', 'password']);
        User::create($data);

        return redirect()->route('auth.login');
    }

    public function loginStore(Request $request) {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(Auth::attempt($request->only(['email', 'password']))){
            return redirect()->route('home');
        }

        return back()->withErrors('Invalid credentials');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
