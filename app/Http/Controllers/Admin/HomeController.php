<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Http;

class HomeController extends Controller
{
    public function index()
    {
        // $respuesta = Http::get('https://api.cambio.today/v1/quotes/USD/COP/json?quantity=1&key=19464|AnWaWHty8LBVMFLKCw_kAwiOqQ15Gvdk');
        // // $respuesta = Http::get('https://cambio.today/api');
        // $datos = $respuesta->json();
        // return view('admin.home', compact('datos'));
        return view('admin.home');
    }
}
