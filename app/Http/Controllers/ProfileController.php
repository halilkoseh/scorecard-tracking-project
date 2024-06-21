<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'current_password' => 'nullable|string',
            'new_password' => 'nullable|string|confirmed',
        ]);

        // Update the user's information
        $user->email = $request->email;
        $user->department = $request->department;
        $user->position = $request->position;

        // Check if current password is provided and valid
        if ($request->filled('current_password') && $request->filled('new_password')) {
            if (Hash::check($request->current_password, $user->password)) {
                // Update password
                $user->password = Hash::make($request->new_password);
            } else {
                return back()->withErrors(['current_password' => 'Mevcut parola yanlış.']);
            }
        }

        $user->save();

        return redirect()->route('profile')->with('success', 'Profiliniz başarıyla güncellendi.');
    }
}