<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;


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

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/offline', function () {    
    return view('laravelpwa.offline');
});


Route::resource('pacientes','App\Http\Controllers\PacienteController');
Route::resource('examenes', 'App\Http\Controllers\ExamenController');
Route::resource('diagnosticos', 'App\Http\Controllers\DiagnosticoController');
Route::resource('empleados', 'App\Http\Controllers\EmpleadoController');
Route::resource('citas', 'App\Http\Controllers\CitaController');
Route::resource('puestos', 'App\Http\Controllers\PuestoController');
Route::resource('sucursales', 'App\Http\Controllers\SucursalController');
Route::resource('habitaciones', 'App\Http\Controllers\habitacionController');
Route::resource('productos', 'App\Http\Controllers\ProductoController');
Route::resource('pacienteshabitaciones', 'App\Http\Controllers\PacienteHabitacionController');
Route::resource('atencionpacientes', 'App\Http\Controllers\AtencionPacienteController');
Route::resource('historialpacientes', 'App\Http\Controllers\HistorialPacienteController');
Route::resource('lotemedicinas', 'App\Http\Controllers\LoteMedicinaController');
Route::resource('empleadosucursales', 'App\Http\Controllers\EmpleadoSucursalController');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=> ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
});
