<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password'); // Adjusted to match the form fields

        if (Auth::attempt($credentials)) {
            // Başarılı giriş
            $user = Auth::user();
            return redirect()->intended('/welcome')->with('user', $user->name);
        }

        // Başarısız giriş
        return back()->with('error', 'Kullanıcı adı veya şifre hatalı.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index');
    }
}