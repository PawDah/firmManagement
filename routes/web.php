<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth'])->group(function (){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('employees',EmployeesController::class);
//    Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
//    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
//    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
//    Route::delete('/cart/{product}',[CartController::class,'destroy'])->name('cart.destroy');
//    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Auth::routes();


