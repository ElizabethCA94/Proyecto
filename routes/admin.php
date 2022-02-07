<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\VentasController;
use Illuminate\Support\Facades\Auth;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
// Auth::routes();
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->names('admin.categorias');
Route::resource('clientes', ClientesController::class)->middleware('auth')->names('admin.clientes');
Route::resource('ventas', VentasController::class)->names('admin.ventas');
Route::resource('productos', ProductosController::class)->middleware('admin.productos');
