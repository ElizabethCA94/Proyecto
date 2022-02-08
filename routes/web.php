<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;




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

// Auth::routes();
// Route::middleware('auth')->group(function(){
//     Route::get('/', [ProductosController::class, 'index']);
//     Route::resource('clientes', ClientesController::class);
//     Route::resource('ventas', VentasController::class);
//     Route::resource('productos', ProductosController::class);
// });


// Route::get('ventas/add-producto', [VentasController::class, 'addProducto']);

Route::get('/pdf', [App\Http\Controllers\PDFController::class, 'PDF'])->name('descargarPDF');

Route::get('/pdfproductos', [App\Http\Controllers\PDFController::class, 'PDFProductos'])->name('descargarPDFProductos');



Route::get('ruta', function(){
    return 'Puede ingresar';
})->middleware('authorization');

Route::get('ruta_verficacion', function(){
    return 'No se puede ingresar, ruta protegida';
});
//dani
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');
Route::resource('clientes', ClientesController::class)->middleware('auth')->middleware('proteccion');
Route::resource('ventas', VentasController::class)->middleware('auth');
Route::resource('productos', ProductosController::class)->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('admin.home');

// Route::middleware('proteccion')->group(function(){
//     // Route::get('/', [ProductosController::class, 'index']);
//     Route::get('/clientes/create');
//     // Route::resource('ventas', VentasController::class);
//     // Route::resource('productos', ProductosController::class);
// // });
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
