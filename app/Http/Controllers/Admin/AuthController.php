<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show admin login page
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle admin login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // AdminMiddleware role check karega
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                if (Auth::user()->role === 'admin') {
                    return redirect()->intended('/admin/dashboard');
                }

                // normal user
                return redirect()->intended('/dashboard');
            }
        }

        return back()->withErrors([
            'email' => 'Invalid email or password'
        ]);
    }

    // Logout (admin)
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
