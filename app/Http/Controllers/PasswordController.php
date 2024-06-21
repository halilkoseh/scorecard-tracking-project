<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function showForgetPasswordForm()
    {
        return view('forgetpasswordPage1'); // 'forgetpasswordPage1.blade.php' view dosyasını döndürüyor
    }
}
