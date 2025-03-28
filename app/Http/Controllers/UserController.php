<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $users = User::all(); 

        // Pasar los usuarios a la vista
        return view('Perfiles.users', compact('users'));
    }

    public function logConnection(User $user)
    {
        $user->update(['last_connection' => now()]);
    }

    public function create()
    {
        return view('Perfiles.create-user'); // Vista para crear un nuevo usuario  
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|string|max:255',
        ]);

        User::create($validated); // Crear un nuevo usuario  
        return redirect()->route('users.index')->with('success', 'Usuario creado con éxito.');
    }

    public function edit(User $user)
    {
        return view('Perfiles.edit-user', compact('user')); // Vista para editar el usuario  
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'role' => 'required|string|max:255',
        ]);

        $user->update($validated); // Actualizar el usuario  
        return redirect()->route('users.index')->with('success', 'Usuario actualizado con éxito.');
    }

    public function destroy(User $user)
    {
        $user->delete(); // Eliminar el usuario  
        return redirect()->route('users.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
