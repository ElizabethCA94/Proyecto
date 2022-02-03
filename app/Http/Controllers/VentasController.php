<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Producto;


class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();
        return view('ventas.index')->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $clientes = Cliente::all();
        return view('ventas.almacenar')
            ->with('productos', $productos)
            ->with('clientes', $clientes);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //instancia de la clase Ventas, -> son campos de la bd y -> son name del formulario
        $venta = new Venta();
        $venta->cliente_id = $request->cliente_id;
        
        $venta->save();

        $productoIds = $request->productoIds;
        $venta->productos()->attach($productoIds);

        return redirect()-> route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $venta = Venta::find($id);
        $productos = Producto::all();
        $clientes = Cliente::all();

        return view('ventas.editar')
            ->with('venta', $venta)
            ->with('productos',  $productos)
            ->with('clientes', $clientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            // 'cliente' => 'required',
            // 'productoIds' => 'required',
            
        ]);

        $venta = Venta::find($id);
        $venta->cliente_id = $request->cliente_id;
        $venta->save();
        $productoIds = $request->productoIds;
        $venta->productos()->sync($productoIds);
        return redirect()-> route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::find($id);
        $venta->delete();
        return redirect()-> route('ventas.index');

    }

    // public function addProducto(){
    //     // $producto = new Producto();
    //     // $producto->nombre = $request->nombres;
    //     // $producto->descripcion= $request->descripcion;
    //     // $producto->precio = $request->precios;
    //     // $producto->imagen = 'Imagen de prueba';
    //     // $producto->save();

    //     // $ventaids = [$id];
    //     // $producto->ventas()->attach($ventaids);
    //     return 'hola';
    // }
}
