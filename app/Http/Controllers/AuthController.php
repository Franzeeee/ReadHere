<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('auth.register');
        }

        $validated = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']), // Hash the password for security
        ]);

        return redirect()
            ->route('login')
            ->with('success', 'Registered successfully!');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('auth.login');
        }

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()
                ->route('home')
                ->with('success', 'Login successfully!');
        }
        return redirect()
            ->route('login')
            ->with('success', 'Error!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('home')
            ->with('success', "Logout Successfully");
    }
}
