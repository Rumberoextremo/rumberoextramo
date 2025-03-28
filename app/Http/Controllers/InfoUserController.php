<?php

namespace App\Http\Controllers;  

use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Auth;  
use Illuminate\Support\Facades\Storage;  
use Illuminate\Validation\Rule;  
use App\Models\User;  

class InfoUserController extends Controller  
{  
    public function create()  
    {  
        $user = Auth::user(); // Obtener el usuario autenticado
        $roles = $user->roles;  
        return view('Perfiles/user-profile', compact('user', 'roles')); // Pasar el usuario a la vista  
    }  

    public function store(Request $request)  
    {  
        // Validar los atributos del request  
        $attributes = request()->validate([  
            'name' => ['required', 'max:50'],  
            'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],  
            'phone' => ['max:50'],  
            'location' => ['max:70'],  
            'about_me' => ['max:150'],  
            'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Validación para la imagen  
        ]);  

        // Verificar si el email está siendo cambiado  
        if ($request->get('email') != Auth::user()->email) {  
            if (env('IS_DEMO') && Auth::user()->id == 1) {  
                return redirect()->back()->withErrors(['msg2' => 'You are in a demo version, you can\'t change the email address.']);  
            }  
        } else {  
            // Validar el correo electrónico si no se cambiará  
            request()->validate([  
                'email' => ['required', 'email', 'max:50', Rule::unique('users')->ignore(Auth::user()->id)],  
            ]);  
        }  

        // Preparar datos para actualizar  
        $userData = [  
            'name' => $attributes['name'],  
            'email' => $attributes['email'],  
            'phone' => $attributes['phone'],  
            'location' => $attributes['location'],  
            'about_me' => $attributes['about_me'],  
        ];  

        // Manejar la imagen de perfil si se ha subido  
        if ($request->hasFile('image')) {  
            // Guardar la imagen y obtener la ruta almacenada  
            $path = $request->file('image')->store('profile_images', 'public');  
            // Actualizar la imagen en el array de datos  
            $userData['profile_image'] = $path;  
        }  

        // Actualizar el usuario en la base de datos  
        User::where('id', Auth::user()->id)->update($userData);  

        return redirect('/user-profile')->with('success', 'Profile updated successfully');  
    }  
}
