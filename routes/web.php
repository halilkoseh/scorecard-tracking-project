<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('loginPage');
})->name("login.index");

Route::get('/signupPage', [SignupController::class, 'showSignupForm'])->name('signupPage');
Route::post('/register', [SignupController::class, 'register'])->name('register');
Route::get('/forgetpasswordPage1', [PasswordController::class, 'showForgetPasswordForm'])->name('forgetpasswordPage1');
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Route for the welcome page
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
