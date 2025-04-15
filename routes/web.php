<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RecargaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FinanzasController;

use App\Models\Factura;
use Mpdf\Mpdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => 'auth'], function () {

	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::get('/', function () {
		return view('home');
	});

	//Routa para pagina en construcción
	Route::get('/under-construction', function() {
		return view('under-construction');
	});	

	// Ruta para la página de inicio y Dashboard
	Route::get('/home', [HomeController::class, 'index'])->name('home');

	Route::get('profile', function () {
		return view('profile');
	})->name('profile');

	// Rutas de autenticación
	Route::get('/login', [SessionsController::class, 'create'])->name('login');
	Route::post('/login', [SessionsController::class, 'store']);
	Route::get('/logout', [SessionsController::class, 'destroy'])->name('logout');

	// Rutas de usuario
	Route::get('/user-profile', [InfoUserController::class, 'create'])->name('user.profile');
	Route::post('/user-profile', [InfoUserController::class, 'store']);

	Route::get('/home', function () {
		return view('home'); // Vista del home
	})->name('home');

	// Rutas de usuario
	Route::resource('users', UserController::class);
	// Ruta para mostrar los usuarios
	Route::get('/Perfiles.users', [UserController::class, 'index'])->name('usuarios.index');

	// Ruta para la página de Políticas de Privacidad  
	Route::get('/privacy_policy', function () {
		return view('pages.privacy_policy');
	})->name('policy');

	// Ruta para la página de Terminos de Condiciones  
	Route::get('/terms_conditions', function () {
		return view('pages.terms_conditions');
	})->name('terms');

	Route::get('/usuario', function () {
		return view('/afiliado/usuario');
	});

	Route::get('/contacto', function () {
		return view('pages.contacto'); // Sin la barra inicial
	})->name('contacto'); // Asignar un nombre a la ruta

	// Ruta Para Dashboard
	Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

	// Ruta para Vistas Productos
	Route::get('/agregar', [ProductController::class, 'create'])->name('productos.create');
	Route::post('/productos', [ProductController::class, 'store'])->name('productos.store');
	Route::get('/lista-productos', [ProductController::class, 'index'])->name('lista.productos');
	Route::get('/productos/{id}/edit', [ProductController::class, 'edit'])->name('productos.edit');
	Route::put('/productos/{id}', [ProductController::class, 'update'])->name('productos.update');
	Route::delete('/productos/{id}', [ProductController::class, 'destroy'])->name('productos.destroy');
	Route::resource('productos', ProductController::class);

	// Ruta Vista de Finanzas
	Route::get('/finanzas', [FinanzasController::class, 'index'])->name('finanzas');
	Route::get('/facturas/pdf/{id}', [FinanzasController::class, 'generarPdf']);

	Route::get('/Demo', function () {
		return view('pages.demo');
	})->name('demo');

	Route::get('/galery', function () {
		return view('pages.galery');
	})->name('galery');

	// Ruta para la página Sobre Nosotros  
	Route::get('/sobre-nosotros', function () {
		return view('pages.about_us');
	})->name('nosotros');

	// Ruta para la página de Enlaces  
	Route::get('/enlaces', function () {
		return view('links');
	});

	// Ruta para la página de Términos y Condiciones  
	Route::get('/terminos-y-condiciones', function () {
		return view('terms_conditions');
	})->name('terminos');

	// Ruta para la página "Quiero ser Aliado"
	Route::get('/aliado', [PageController::class, 'aliado'])->name('aliado');
	// Ruta para almacenar la solicitud
	Route::post('/aliado/store', [PageController::class, 'store'])->name('aliado.store');

	// Ruta para la página "Quiero ser Afiliado"
	Route::get('/afiliado', [PageController::class, 'afiliado'])->name('afiliado');
	// Ruta para almacenar la solicitud de afiliado
	Route::post('/afiliado/store', [PageController::class, 'storeAfiliado'])->name('afiliado.store');

	Route::get('/gracias', function () {
		return view('pages.gracias');
	})->name('gracias');
});

//Ruta de cerrar session
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

//Metodos de Recarga
Route::get('/metodo-recarga', [RecargaController::class, 'mostrarMetodosRecarga'])->name('metodo-recarga');
// Ruta para mostrar el formulario de recarga (GET)
Route::get('/recarga/pago-movil', [RecargaController::class, 'mostrarPagoMovil'])->name('recarga.movil');
Route::get('/recarga/divisas', [RecargaController::class, 'mostrarDivisas'])->name('recarga.movil');
Route::get('/recarga/transferencia', [RecargaController::class, 'mostrarTransferencia'])->name('recarga.movil');
Route::get('/transferencia-exitosa', [RecargaController::class, 'metodoTransferenciaExitosa'])->name('transferencia_exitosa');
Route::get('/recarga/tarjeta', [RecargaController::class, 'mostrarTarjeta'])->name('recarga.movil');
//Ruta para mostrar el formulario de recarga (POST)
Route::post('/recarga/pago-movil', [RecargaController::class, 'recargarMovil'])->name('pago.movil.procesar');
Route::post('/recarga/pago-movil/procesar', [RecargaController::class, 'procesarPagoMovil'])->name('recarga.movil.procesar');
Route::post('/recarga/divisas', [RecargaController::class, 'recargarDivisas'])->name('recarga.divisas');
Route::post('/recarga/transferencia', [RecargaController::class, 'recargarTransferencia'])->name('recarga.transferencia');
Route::post('/recarga/tarjeta', [RecargaController::class, 'recargarTarjeta'])->name('recarga.tarjeta');
Route::post('/recarga/{id}/estado', [RecargaController::class, 'updateStatus'])->name('recarga.updateStatus');

//Ruta para mostrar la vista de la recarga de tarjeta
Route::get('/recarga_exitosa', [RecargaController::class, 'metodoRecargaExitosa'])->name('recarga_exitosa');

//Ruta para mostrar la vista de recargas y pagos exitosos
Route::get('/recarga-exitosa', function () {
    return view('recarga_exitosa');
})->name('recarga.exitosa');

//Rutas para mostrar Pago Movil y Transferencia Exitosa
Route::get('/pago-movil-exitoso', function () {
	return view('pago_movil_exitoso');
})->name('pago_movil_exitoso');

//Rutas para mostrar la vista de recargas y pagos fallidos

Route::get('/recarga-fallida', function () {
	return view('recarga_fallida');
})->name('recarga.fallida');

// Middleware

Route::group(['middleware' => 'guest'], function () {
	Route::get('/register', [RegisterController::class, 'create']);
	Route::post('/register', [RegisterController::class, 'store']);
	Route::get('/login', [SessionsController::class, 'create']);
	Route::post('/session', [SessionsController::class, 'store']);
	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

	Route::get('/password/reset/{token}', [ResetController::class, 'resetPass'])->name('password.reset.form');
});

Route::get('/login', function () {
	return view('session/login-session');
})->name('login');
