<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6|confirmed"
        ]);

        $data = $request->only(['name', 'email', 'password']);
        User::create($data);

        return redirect()->route('auth.login');
    }
}
