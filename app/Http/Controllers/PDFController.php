<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Producto;
use App\Models\Cliente;


class PDFController extends Controller
{
    public function PDF(){
        $clientes = Cliente::all();
        $pdf = \PDF::loadView('clientes', compact('clientes'));
        return $pdf->stream('reporteProductos.pdf');
    }

    public function PDFProductos(){
        $productos = Producto::all();
        $pdf = \PDF::loadView('productos', compact('productos'));
        return $pdf->stream('reporteProductos.pdf');
        
    }

    
}
