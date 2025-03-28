@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid">
    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/users/fondo_234.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-dark opacity-8"></span>
    </div>

    <div class="card card-body blur shadow-blur mx-4 mt-n6">
        <div class="row gx-4 align-items-center">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img id="profileImage" src="../assets/img/bruce-mars.jpg" alt="Profile Image" class="w-100 border-radius-lg shadow-sm">
                    <input type="file" id="imageInput" accept="image/*" style="display:none;" />
                    <a href="javascript:;" id="editButton" class="btn btn-sm btn-icon-only bg-gradient-light position-absolute bottom-0 end-0 mb-n2 me-n2">
                        <i class="fa fa-pen top-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Image"></i>
                    </a>
                </div>
            </div>
            <div class="col-auto my-auto">
                <h5 class="mb-1">{{ $user->name }}</h5>
                <p class="mb-0 font-weight-bold text-sm">{{ $user->role }}</p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Información de Perfil') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action="/user-profile" method="POST" role="form text-left">
                    @csrf
                    @if($errors->any())
                    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-text">{{ $errors->first() }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="m-3 alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                        <span class="alert-text">{{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">{{ __('Nombre Completo') }}</label>
                                <input class="form-control @error('name') border border-danger @enderror" value="{{ auth()->user()->name }}" type="text" placeholder="Nombre" id="user-name" name="name">
                                @error('name')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-email" class="form-control-label">{{ __('Correo Electrónico') }}</label>
                                <input class="form-control @error('email') border border-danger @enderror" value="{{ auth()->user()->email }}" type="email" placeholder="@example.com" id="user-email" name="email">
                                @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-phone" class="form-control-label">{{ __('Teléfono') }}</label>
                                <input class="form-control @error('phone') border border-danger @enderror" type="tel" placeholder="40770888444" id="user-phone" name="phone" value="{{ auth()->user()->phone }}">
                                @error('phone')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="user-location" class="form-control-label">{{ __('Dirección') }}</label>
                                <input class="form-control @error('location') border border-danger @enderror" type="text" placeholder="Ubicación" id="user-location" name="location" value="{{ auth()->user()->location }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="about">{{ __('Sobre Mí') }}</label>
                        <textarea class="form-control @error('about_me') border border-danger @enderror" id="about" rows="3" placeholder="Diga algo sobre usted" name="about_me">{{ auth()->user()->about_me }}</textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary btn-md mt-4 mb-4">{{ __('Guardar') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('editButton').addEventListener('click', function() {
        document.getElementById('imageInput').click(); // Abre el selector de archivos  
    });

    document.getElementById('imageInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Cambia la imagen de perfil con la nueva imagen seleccionada  
                document.getElementById('profileImage').src = e.target.result;
            };
            reader.readAsDataURL(file); // Lee el archivo como una URL de datos  
        }
    });
</script>

@endsection