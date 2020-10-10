<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReciboEmpleadoEmailController;
use App\Http\Controllers\FacadeLoginController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('facade/login', [App\Http\Controllers\FacadeLoginController::class, 'login'])->name('facade.login');