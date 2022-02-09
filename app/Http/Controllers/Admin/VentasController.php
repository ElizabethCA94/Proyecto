<?php

namespace App\Http\Controllers\Admin;
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
    public function __construct()
    {
        $this->middleware('can:admin.ventas.index')->only('index');
        $this->middleware('can:admin.ventas.edit')->only('edit', 'update');
        $this->middleware('can:admin.ventas.create')->only('create', 'store');
        $this->middleware('can:admin.ventas.show')->only('show');
        $this->middleware('can:admin.ventas.destroy')->only('destroy');
    }
    public function index()
    {
        $ventas = Venta::all();
        return view('admin.ventas.index')->with('ventas', $ventas);
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
        return view('admin.ventas.almacenar')
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

        return redirect()-> route('admin.ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $venta = Venta::find($id);
        return view('admin.ventas.mostrar', compact('venta'));
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

        return view('admin.ventas.editar')
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
        return redirect()-> route('admin.ventas.index');
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
        return redirect()-> route('admin.ventas.index');

    }

}
