<?php

use App\Http\Controllers\ContractController;
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
    Route::resource('contracts', ContractController::class);
    Route::get('/contracts/create/{employee}', [ContractController::class, 'create'])->name('contracts.create.employee');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);


