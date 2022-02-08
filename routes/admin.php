<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClientesController;
use App\Http\Controllers\Admin\ProductosController;
use App\Http\Controllers\Admin\VentasController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\PDFController;


use Illuminate\Support\Facades\Auth;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('categorias',CategoriaController::class)->names('admin.categoria');
Route::resource('clientes', ClientesController::class)->names('admin.clientes');
Route::resource('ventas', VentasController::class)->names('admin.ventas');
Route::resource('productos', ProductosController::class)->names('admin.productos');
Route::get('pdf', [PDFController::class, 'PDF'])->name('admin.descargarPDF');
Route::get('pdfproductos', [PDFController::class, 'PDFProductos'])->name('admin.descargarPDFProductos');