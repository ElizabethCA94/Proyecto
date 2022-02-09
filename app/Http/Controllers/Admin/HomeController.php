<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Venta;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Http;

class HomeController extends Controller
{
    public function index()
    {
        // $data=Venta::select('id', 'created_at')->get()->groupBy(function($data){
        //     return Carbon::parse($data->created_at)->format('m');
        // });
        // $respuesta = Http::get('https://api.cambio.today/v1/quotes/USD/COP/json?quantity=1&key=19464|AnWaWHty8LBVMFLKCw_kAwiOqQ15Gvdk');
        $respuesta = Http::get('https://free.currconv.com/api/v7/convert?q=USD_COP&compact=ultra&apiKey=235c156296f183d5d706');
        $datos = $respuesta;
        return view('admin.home', compact('datos'));
        // return view('admin.home', ['data'=>$data]);
    }
}
