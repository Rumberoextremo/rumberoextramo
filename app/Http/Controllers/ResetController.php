<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetController extends Controller
{
    public function create()
    {
        return view('session/reset-password/sendEmail');
    }

    public function sendEmail(Request $request)
    {
        if (env('IS_DEMO')) {
            return redirect()->back()->withErrors(['msg2' => 'You are in a demo version, you can\'t recover your password.']);
        } else {
            $request->validate(['email' => 'required|email']);

            // Buscar el usuario por correo electrónico
            $user = \App\Models\User::where('email', $request->email)->first();

            if (!$user) {
                return back()->withErrors(['email' => 'No encontramos un usuario con ese correo electrónico.']);
            }

            // Generar un token para el usuario
            $token = Password::createToken($user);

            // Redirigir a la página de cambio de contraseña
            return redirect()->route('password.reset.form', ['token' => $token, 'email' => $request->email]);
        }
    }

    public function resetPass($token)
    {
        return view('session/reset-password/resetPassword', ['token' => $token]);
    }
}
