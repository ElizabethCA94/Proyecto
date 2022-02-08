<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use PDF;
use App\Models\Producto;
use App\Models\Cliente;


class PDFController extends Controller
{
    public function PDF(){
        $clientes = Cliente::all();
        $pdf = \PDF::loadView('admin.clientes', compact('clientes'));
        return $pdf->stream('reporteClientes.pdf');
    }

    public function PDFProductos(){
        $productos = Producto::all();
        $pdf = \PDF::loadView('admin.productos', compact('productos'));
        return $pdf->stream('reporteProductos.pdf');
        
    }

    
}
