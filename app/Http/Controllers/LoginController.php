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
            return redirect()->intended('/welcome');
        }

        // Başarısız giriş
        return back()->with('error', 'Kullanıcı adı veya şifre hatalı.');
    }
}
