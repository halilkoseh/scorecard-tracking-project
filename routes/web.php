<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('loginPage');
})->name("login.index");

Route::get('/signupPage', [SignupController::class, 'showSignupForm'])->name('signupPage');
Route::post('/register', [SignupController::class, 'register'])->name('register');
Route::get('/forgetpasswordPage1', [PasswordController::class, 'showForgetPasswordForm'])->name('forgetpasswordPage1');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/welcome', function () {
    $user = session('user');
    return view('welcome', ['user' => $user]);
})->name('welcome');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');