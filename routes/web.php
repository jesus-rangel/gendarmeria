<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReciboEmpleadoEmailController;
use App\Http\Controllers\FacadeLoginController;
use App\Http\Controllers\CirsubController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganizationController;

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
    Route::get('/organizations/delete/{organization}', [OrganizationController::class, 'delete'])->name('organizations.delete');
    
    Route::resource('users', UserController::class);
    Route::resource('organizations', OrganizationController::class);
});

Route::get('facade/login', [App\Http\Controllers\FacadeLoginController::class, 'login'])->name('facade.login');

Route::get('cirsub', [CirsubController::class, 'cirsub'])->name('cirsub');

Route::get('companies', [OrganizationController::class, 'index'])->name('companies');