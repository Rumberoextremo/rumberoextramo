<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($attributes)) {
            session()->regenerate();
            
            // Obtén el usuario autenticado
            $user = Auth::user();

            // Redirige según el rol del usuario
            if ($user->role === 'admin') {
                return redirect()->route('dashboard')->with(['success' => 'You are logged in.']);
            } else {
                return redirect()->route('home')->with(['success' => 'You are logged in.']);
            }
        } else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }
    }
    
    public function destroy()
    {
        Auth::logout();
        return redirect('/login')->with(['success' => 'You\'ve been logged out.']);
    }
}
