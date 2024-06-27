<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validasi data input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user_animes',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Simpan data pengguna ke dalam database
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('login')->with('status', 'Registrasi berhasil! Silakan login untuk melanjutkan.');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
