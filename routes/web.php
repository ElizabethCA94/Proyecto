<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Auth;



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

Auth::routes();
Route::middleware('auth')->group(function(){
    Route::get('/', [ProductosController::class, 'index']);
    Route::resource('clientes', ClientesController::class);
    Route::resource('ventas', VentasController::class);
    Route::resource('productos', ProductosController::class);
});


// Route::get('ventas/add-producto', [VentasController::class, 'addProducto']);





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ruta', function(){
    return 'Puede ingresar';
})->middleware('proteccion');

Route::get('ruta_verficacion', function(){
    return 'No se puede ingresar, ruta protegida';
});
//dani
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('instrumentos', App\Http\Controllers\InstrumentoController::class)->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');