<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');


Route::get('/create', [App\Http\Controllers\ShipmentController::class, 'create'])->name('shipment.create');


Route::get('/shipments', [App\Http\Controllers\ShipmentController::class, 'index'])->name('shipment.index');

Route::post('/create', [App\Http\Controllers\ShipmentController::class, 'store'])->name('shipment.create');

Route::post('/loginnow', [App\Http\Controllers\Auth\LoginController::class, 'LoginNow'])->name('auth.loginnow');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('auth.login');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('auth.register');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('auth.register.create');

Route::get('/history', [App\Http\Controllers\HistoryController::class, 'history'])->name('history');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
