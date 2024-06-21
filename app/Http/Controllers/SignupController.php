<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signupPage');
    }


    public function register(Request $request)
    {
        // Form verilerini doğrulayın


        // Yeni kullanıcı oluşturun
        $user = new User();
        $user->TC = $request->TC;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password); // Şifreleme işlemi
        $user->department = $request->department;
        $user->school_number = $request->school_number;
        $user->position = $request->position;
        $user->save();


        return redirect()->route('login.index')
            ->with('success', 'Kayıt başarılı. Giriş yapabilirsiniz.');

    }
}
