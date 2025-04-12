@extends('layouts.user_type.auth')

@section('content')

@if (session('mensaje'))
        <div class="alert alert-info">{{ session('mensaje') }}</div>
    @endif

    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 shadow-lg">
                    <div class="card-header pb-0">
                        <h6 class="text-primary font-weight-bolder">Métodos de Pago</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Método de Pago</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripción</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Última Transacción</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('assets/img/metodo_pago/pagomovil.png') }}" class="avatar avatar-sm me-3" alt="Pago Móvil">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm font-weight-bold">Pago Móvil</h6>
                                                    <p class="text-xs text-secondary mb-0">Pago rápido y seguro.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Transacción instantánea</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success" id="status-pago-movil">Disponible</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/01/25</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ url('/recarga/pago-movil') }}" class="btn btn-secondary btn-sm text-xs" data-toggle="tooltip" data-original-title="Realizar Pago">
                                                Pagar
                                            </a>
                                            <button class="btn btn-primary btn-sm ms-2" onclick="toggleStatus('status-pago-movil')">
                                                Cambiar Estado
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('assets/img/metodo_pago/divisas.png') }}" class="avatar avatar-sm me-3" alt="Divisas">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm font-weight-bold">Divisas</h6>
                                                    <p class="text-xs text-secondary mb-0">Conversión de divisas para pagos.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Cambio de moneda</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-warning" id="status-divisas">Limitado</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">20/01/25</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ url('/recarga/divisas') }}" class="btn btn-secondary btn-sm text-xs" data-toggle="tooltip" data-original-title="Realizar Pago">
                                                Pagar
                                            </a>
                                            <button class="btn btn-primary btn-sm ms-2" onclick="toggleStatus('status-divisas')">
                                                Cambiar Estado
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('assets/img/metodo_pago/transferencia.png') }}" class="avatar avatar-sm me-3" alt="Transferencia">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm font-weight-bold">Transferencia</h6>
                                                    <p class="text-xs text-secondary mb-0">Envía dinero y realiza pagos.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Transferencia bancaria</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success" id="status-transferencia">Disponible</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">22/01/25</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ url('/recarga/transferencia') }}" class="btn btn-secondary btn-sm text-xs" data-toggle="tooltip" data-original-title="Realizar Pago">
                                                Pagar
                                            </a>
                                            <button class="btn btn-primary btn-sm ms-2" onclick="toggleStatus('status-transferencia')">
                                                Cambiar Estado
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="{{ asset('assets/img/metodo_pago/tarjeta.png') }}" class="avatar avatar-sm me-3" alt="Tarjeta Internacional">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm font-weight-bold">Tarjetas Internacionales</h6>
                                                    <p class="text-xs text-secondary mb-0">Realiza pagos con tu tarjeta de crédito.</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Tarjetas aceptadas</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-danger" id="status-tarjeta">No disponible</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">N/A</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ url('/recarga/tarjeta') }}" class="btn btn-secondary btn-sm text-xs" data-toggle="tooltip" data-original-title="Realizar Pago">
                                                Pagar
                                            </a>
                                            <button class="btn btn-primary btn-sm ms-2" onclick="toggleStatus('status-tarjeta')">
                                                Cambiar Estado
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
function toggleStatus(elementId) {
    const badge = document.getElementById(elementId);
    if (badge.classList.contains('bg-gradient-success')) {
        badge.classList.remove('bg-gradient-success');
        badge.classList.add('bg-gradient-danger');
        badge.textContent = 'No disponible';
    } else if (badge.classList.contains('bg-gradient-danger')) {
        badge.classList.remove('bg-gradient-danger');
        badge.classList.add('bg-gradient-success');
        badge.textContent = 'Disponible';
    } else if (badge.classList.contains('bg-gradient-warning')) {
        badge.classList.remove('bg-gradient-warning');
        badge.classList.add('bg-gradient-success');
        badge.textContent = 'Disponible';
    } else {
        badge.classList.remove('bg-gradient-warning');
        badge.classList.add('bg-gradient-warning');
        badge.textContent = 'Limitado';
    }
}
</script>

@endsection