<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Producto;

class PDFController extends Controller
{
    public function PDF(){
        $pdf = \PDF::loadView('prueba');
        return $pdf->stream('reporteProductos.pdf');
    }

    public function PDFProductos(){
        $productos = Producto::all();
        $pdf = \PDF::loadView('productos', compact('productos'));
        return $pdf->stream('reporteProductos.pdf');
        
    }
}
