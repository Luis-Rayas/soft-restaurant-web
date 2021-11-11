<?php

use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\OrdenController;
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
Route::get('/ticket', [MainController::class, 'printTicket'])->name('printTicket');

Route::get('/mesas', [MesaController::class, 'index'])->name('mesaIndex');
Route::get('/mesas/create', [MesaController::class, 'create'])->name('mesaCreate');
Route::get('/mesas/edit/{id}', [MesaController::class, 'edit'])->name('mesaEdit');
Route::get('/mesas/{id_mesa}/orden', [MesaController::class, 'viewOrdenByMesa']);

Route::get('/platillos', [PlatilloController::class, 'index'])->name('platilloIndex');
Route::get('/platillos/edit/{id}', [PlatilloController::class, 'edit'])->name('platilloEdit');
Route::get('/platillos/create', [PlatilloController::class, 'create'])->name('platilloCreate');

Route::get('/ingredientes', [IngredienteController::class, 'index'])->name('ingredienteIndex');
Route::get('/ingredientes/edit/{id}', [IngredienteController::class, 'edit'])->name('ingredienteEdit');
Route::get('/ingredientes/create', [IngredienteController::class, 'edit'])->name('ingredienteCreate');

Route::get('/proveedores', [ProveedorController::class, 'index'])->name('proveedorIndex');
Route::get('/proveedores/edit/{id}', [ProveedorController::class, 'edit'])->name('proveedorEdit');
Route::get('/proveedores/create', [ProveedorController::class, 'create'])->name('proveedorCreate');
Route::get('/mail', [ProveedorController::class, 'sendMail']);

Route::get('/ordenes', [OrdenController::class, 'index'])->name('ordenIndex');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
