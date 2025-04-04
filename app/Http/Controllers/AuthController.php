<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function create()
    {
        return view('auth.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email', 'password']);
        $remember = $request->filled('remember');

        if(Auth::attempt($credentials, $remember)){
            return redirect()->intended('/');
        }else{
            return redirect()->back()
            ->with('error', 'Invalid credentials');
        }
    }
    public function showRegisterForm()
    {
        return view('auth.register'); // Stranica za registraciju
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect()->route('jobs.index')->with('success', 'Registration successful!');
    }

    public function destroy()
    {
        Auth::logout();
 
         request()->session()->invalidate();
         request()->session()->regenerateToken();
 
         return redirect('/');
    }
}
