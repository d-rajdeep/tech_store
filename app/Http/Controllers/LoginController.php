<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // your blade file path
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:registrations,email',
            'password' => 'required|min:6',
        ]);

        $user = Registration::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user, $request->has('remember'));
            return redirect()->route('admin.dashboard')->with('success', 'Login successful');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
