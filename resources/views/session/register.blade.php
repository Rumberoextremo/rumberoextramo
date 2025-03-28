@extends('layouts.user_type.guest')

@section('content')

<main class="main-content mt-0">
  <section>
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
          <div class="card card-plain mt-8" style="width: 100%; max-width: 450px; height: auto; border-radius: 15px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
            <div class="card-header pb-0 text-left bg-transparent">
              <h3 class="font-weight-bolder text-info text-gradient">Regístrate</h3>
            </div>
            <div class="card-body d-flex flex-column justify-content-center">
              <form role="form" method="POST" action="/register">
                @csrf
                <label>Nombre & Apellido</label>
                <div class="mb-3">
                  <input type="text" class="form-control" name="name" id="name" placeholder="Nombre & Apellido" value="{{ old('name') }}" aria-label="Name" aria-describedby="name">
                  @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <label>Correo Electrónico</label>
                <div class="mb-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" value="{{ old('email') }}" aria-label="Email" aria-describedby="email-addon">
                  @error('email')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <label>Contraseña</label>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" aria-label="Password" aria-describedby="password-addon">
                  @error('password')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="agreement" name="agreement" checked>
                  <label class="form-check-label" for="agreement">Acepto los <a href="{{ route('terms') }}" class="text-info text-gradient font-weight-bold">Términos & Condiciones</a></label>
                  @error('agreement')
                    <p class="text-danger text-xs mt-2">Primero, acepta los Términos y Condiciones, luego intenta registrarte de nuevo.</p>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Registrate</button>
                </div>
              </form>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1">
              <small class="text-muted">¿Ya tienes cuenta? <a href="login" class="text-info text-gradient font-weight-bold">Ingresar</a></small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

@endsection