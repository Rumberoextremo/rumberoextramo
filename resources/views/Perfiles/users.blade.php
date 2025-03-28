@extends('layouts.user_type.auth')

@section('content')  

<div class="container mt-5">  
    <div class="row">  
        <div class="col-12">  
            <div class="card shadow-lg border-0">  
                <div class="card-header bg-gradient text-white">  
                    <h5 class="mb-0">Lista de Usuarios</h5>  
                </div>  
                <div class="card-body">  
                    <div class="table-responsive">  
                        <table class="table table-hover table-sm">  
                            <thead class="thead-dark">  
                                <tr>  
                                    <th>ID</th>  
                                    <th>Nombre</th>  
                                    <th>Email</th>  
                                    <th>Fecha de Creación</th>  
                                    <th>Última Conexión</th>  
                                    <th>Roles</th>  
                                    <th>Acciones</th>  
                                </tr>  
                            </thead>  
                            <tbody>  
                                @foreach($users as $user)  
                                    <tr class="{{ $loop->even ? 'table-light' : 'table-primary' }}">  
                                        <td>{{ $user->id }}</td>  
                                        <td>{{ $user->name }}</td>  
                                        <td>{{ $user->email }}</td>  
                                        <td>{{ $user->created_at->format('d/m/Y') }}</td>  
                                        <td>{{ $user->last_connection ? $user->last_connection->format('d/m/Y') : 'Nunca' }}</td>  
                                        <td>{{ implode(', ', $user->roles()->pluck('name')->toArray()) }}</td>  
                                        <td>  
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm">Modificar</a>  
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">  
                                                @csrf  
                                                @method('DELETE')  
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">Eliminar</button>  
                                            </form>  
                                        </td>  
                                    </tr>  
                                @endforeach  
                            </tbody>  
                        </table>  
                        @if($users->isEmpty())
                            <div class="text-center mt-3">  
                                <p class="text-muted">No hay más usuarios registrados.</p>  
                            </div>  
                        @endif  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  

<style>  
    .bg-gradient {  
        background: linear-gradient(to right, #007bff, #6dd5ed);  
    }  

    .table-hover tbody tr:hover {  
        background-color: rgba(0, 123, 255, 0.2);  
    }  

    .thead-dark th {  
        background-color: #343a40;  
        color: white;  
    }  

    .table {  
        font-size: 0.85rem;  
    }  

    .btn-info {  
        background-color: #17a2b8;  
        border-color: #17a2b8;  
    }  
</style>  

@endsection