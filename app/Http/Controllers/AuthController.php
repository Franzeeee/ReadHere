<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('auth.login');
        }

        return redirect()
            ->route('home')
            ->with('success', 'Login successfully!');
    }
}
