<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('cargos', \App\Http\Controllers\CargoController::class);
    Route::resource('cintas', \App\Http\Controllers\CintaController::class);
    Route::resource('telas', \App\Http\Controllers\TelaController::class);
    Route::resource('telacolores', \App\Http\Controllers\TelacoloreController::class);
    Route::resource('personas', \App\Http\Controllers\PersonaController::class);
    Route::resource('clientes', \App\Http\Controllers\ClienteController::class);
    Route::resource('empleados', \App\Http\Controllers\EmpleadoController::class);
    Route::resource('sucursals', \App\Http\Controllers\SucursalController::class);
    Route::resource('inventarios', \App\Http\Controllers\InventarioController::class);
    Route::resource('preferencias', \App\Http\Controllers\PreferenciaController::class);
    Route::resource('transferenciainventarios', \App\Http\Controllers\TransferenciainventarioController::class);
    Route::resource('transacciones', \App\Http\Controllers\TransaccioneController::class);
    Route::resource('pedidos', \App\Http\Controllers\PedidoController::class);
    Route::resource('asistenciadiarias', \App\Http\Controllers\AsistenciadiariaController::class);
    Route::resource('metodopagos', \App\Http\Controllers\MetodopagoController::class);
    Route::resource('pagos', \App\Http\Controllers\PagoController::class);
    Route::resource('flujoefectivodiarios', \App\Http\Controllers\FlujoefectivodiarioController::class);
    Route::resource('preciotelasucursals', \App\Http\Controllers\PreciotelasucursalController::class);
    Route::resource('detalletransaccions', \App\Http\Controllers\DetalletransaccionController::class);
});
