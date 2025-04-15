@extends('layouts.user_type.auth')

@section('content')

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-8">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card bg-primary shadow-lg">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                  <div class="card-body position-relative z-index-1 p-3 text-center">
                    <i class="fas fa-landmark text-white p-2 fa-2x"></i>
                    <h5 class="text-white mt-4 mb-4">Bolivares Recibidos</h5>
                    <span class="text-xs text-white">Rumbero Extremo</span>
                    <hr class="horizontal dark my-3">
                    <h5 class="mb-0 text-white">+BS.S{{ $bolivaresRecibidos }}</h5>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card bg-success shadow-lg">
                <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                  <span class="mask bg-gradient-dark"></span>
                  <div class="card-body position-relative z-index-1 p-3 text-center">
                    <i class="fab fa-paypal text-white p-2 fa-2x"></i>
                    <h5 class="text-white mt-4 mb-4">Dolares Recibidos</h5>
                    <span class="text-xs text-white">Rumbero Extremo</span>
                    <hr class="horizontal dark my-3">
                    <h5 class="mb-0 text-white">${{ $dolaresRecibidos }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Contenedor para la gráfica -->
          <div class="row mt-4">
            <div class="col-12">
              <div class="card shadow-lg">
                <div class="card-header">
                  <h5 class="mb-0">Gráfica de Transacciones</h5>
                </div>
                <div class="card-body">
                  <canvas id="transactionsChart" width="400" height="200"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card h-100 shadow-lg">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-6 d-flex align-items-center">
              <h6 class="mb-0">Facturas</h6>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-outline-primary btn-sm mb-0">Ver Todas</button>
            </div>
          </div>
        </div>
        <div class="card-body p-3 pb-0">
          <ul class="list-group">
            @foreach($facturas as $factura)
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex flex-column">
                <h6 class="mb-1 text-dark font-weight-bold text-sm">{{ $factura->fecha }}</h6>
                <span class="text-xs">{{ $factura->numero }}</span>
              </div>
              <div class="d-flex align-items-center text-sm">
                ${{ number_format($factura->monto, 2) }} <!-- Mostrar monto en formato correcto -->
                <a href="{{ url('/facturas/pdf/' . $factura->id) }}" class="btn btn-link text-danger text-sm mb-0 px-0 ms-4">
                  <i class="fas fa-file-pdf text-lg me-1"></i> <strong>PDF</strong>
                </a>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col-md-7">
      <div class="card shadow-lg">
        <div class="card-header pb-0 px-3">
          <h6 class="mb-0">Información de Facturación</h6>
        </div>
        <div class="card-body pt-4 p-3">
          <ul class="list-group">
            @foreach($facturacion as $factura)
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <span>{{ $factura->mes }} {{ $factura->año }}</span>
              <span class="badge bg-primary rounded-pill">${{ $factura->monto }}</span>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="card h-100 mb-4 shadow-lg">
        <div class="card-header pb-0 px-3">
          <div class="row">
            <div class="col-md-6">
              <h6 class="mb-0">Tus Transacciones</h6>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
              <i class="far fa-calendar-alt me-2"></i>
              <small>23 - 30 March 2020</small>
            </div>
          </div>
        </div>
        <div class="card-body pt-4 p-3">
          <h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Más Recientes</h6>
          <ul class="list-group">
            @foreach($transacciones as $transaccion)
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded {{ $transaccion->monto < 0 ? 'btn-outline-danger' : 'btn-outline-success' }} mb-0 me-3 btn-sm d-flex align-items-center justify-content-center">
                  <i class="{{ $transaccion->monto < 0 ? 'fas fa-arrow-down' : 'fas fa-arrow-up' }}"></i>
                </button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">{{ $transaccion->nombre }}</h6>
                  <span class="text-xs">{{ $transaccion->fecha }}</span>
                </div>
              </div>
              <div class="d-flex align-items-center {{ $transaccion->monto < 0 ? 'text-danger' : 'text-success' }} text-gradient text-sm font-weight-bold">
                {{ $transaccion->monto < 0 ? '-' : '+' }} ${{ abs($transaccion->monto) }}
              </div>
            </li>
            @endforeach
          </ul>
          <!-- Paginación -->
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mt-4">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Anterior</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Script para la gráfica -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('transactionsChart').getContext('2d');
  const transactionsChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Bolivares', 'Dolares'],
      datasets: [{
        label: 'Montos Recibidos',
        data: [4000, 3000],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
          'rgb(180, 99, 255)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

@endsection