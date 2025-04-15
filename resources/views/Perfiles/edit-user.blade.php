@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Usuario</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="form-group">
            <label for="role">Rol</label>
            <input type="text" class="form-control" id="role" name="role" value="{{ old('role', $user->role) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection