<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
  <div class="container-fluid">
    <div class="logo-menu">
      <a href="{{ route('home') }}" class="logo">
        <img src="assets/img/logos/logo.png" alt="Rumbero Extremo Logo">
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ auth()->user() ? url('static-sign-up') : url('register') }}">
            <i class="fas fa-user-circle me-1"></i>
            Registrarme
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ auth()->user() ? url('static-sign-in') : url('login') }}">
            <i class="fas fa-key me-1"></i>
            Ingresar
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->