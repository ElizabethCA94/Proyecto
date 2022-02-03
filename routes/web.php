<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;



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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ProductosController::class, 'index']);

Route::resource('clientes', ClientesController::class);

Route::resource('ventas', VentasController::class);

Route::resource('productos', ProductosController::class);

// Route::get('ventas/add-producto', [VentasController::class, 'addProducto']);


