<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/vehicles', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicle.index');
Route::get('/vehicles/create', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicle.create');
Route::get('/vehicles/edit/{id}', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicle.edit');
Route::post('/vehicles/store', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicle.store');
Route::post('/vehicles/update/{id}', [App\Http\Controllers\VehicleController::class, 'update'])->name('vehicle.update');
Route::get('/vehicles/destroy/{id}', [App\Http\Controllers\VehicleController::class, 'destroy'])->name('vehicle.destroy');