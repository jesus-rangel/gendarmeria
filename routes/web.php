<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CirsubController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\FarmaciaController;
use App\Http\Controllers\OperacionController;
use App\Http\Controllers\VademecumController;
use App\Http\Controllers\FacadeLoginController;
use App\Http\Controllers\ReciboEmpleadoEmailController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('recibo_empleado', [ReciboEmpleadoEmailController::class, 'send_mails'])->name('recibo_empleado');

Auth::routes();

Route::middleware(['auth', 'CheckActiveUser'])->group(function () 
{
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/users/change-password-form', [UserController::class, 'changePasswordForm'])->name('users.change-password-form');
    Route::get('/users/change-password-email', [UserController::class, 'changePasswordEmail'])->name('users.change-password-email');
    Route::post('/users/change-password', [UserController::class, 'changePassword'])->name('users.change-password');
    Route::get('/users/delete/{user}', [UserController::class, 'delete'])->name('users.delete');
    Route::get('/farmacias/delete/{organization}', [FarmaciaController::class, 'delete'])->name('farmacias.delete');
    Route::get('/clientes/add-product/{cliente:dni}', [ClienteController::class, 'addProduct'])->name('clientes.add-product');
    Route::post('operacion', [OperacionController::class, 'store'])->name('operacion.store');
    Route::get('/operacion/{operacion}/destroy', [OperacionController::class, 'destroy'])->name('operacion.destroy');
    
    Route::resource('users', UserController::class);
    Route::resource('farmacias', FarmaciaController::class);
    Route::resource('vademecum', VademecumController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('sales', SaleController::class);
});

Route::get('facade/login', [App\Http\Controllers\FacadeLoginController::class, 'login'])->name('facade.login');

Route::get('cirsub', [CirsubController::class, 'index'])->name('cirsub');