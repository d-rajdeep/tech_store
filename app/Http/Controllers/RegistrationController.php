<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'email'      => 'required|email|unique:registrations,email',
            'phone'      => 'required|string|unique:registrations,phone',
            'password'   => 'required|string|min:6|confirmed',
        ]);

        Registration::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'password'   => Hash::make($request->password),
        ]);

        return redirect()->route('registration.form')->with('success', 'Registration successful!');
    }
}