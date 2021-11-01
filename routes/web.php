<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\ProveedorController;
use App\Models\Proveedor;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'index'])->name('mainIndex');

Route::get('/platillos', [PlatilloController::class, 'index'])->name('platilloIndex');
Route::get('/platillos/index', [PlatilloController::class, 'index'])->name('platilloIndex');
Route::get('/platillos/edit/{id}', [PlatilloController::class, 'edit'])->name('platilloEdit');
Route::get('/platillos/create', [PlatilloController::class, 'creare'])->name('platilloCreate');

Route::get('/mail', [ProveedorController::class, 'sendMail']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
