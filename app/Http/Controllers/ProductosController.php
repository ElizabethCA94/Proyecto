<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        //retorne una vista 
        return view('productos.index')->with('productos', $productos);
        // return view('Productos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.almacenar')
            ->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //instancia de la clase Productos, -> son campos de la bd y -> son name del formulario
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion= $request->descripcion;
        $producto->precio = $request->precio;
        $producto->imagen = 'Imagen de prueba';
        $producto->categoria_id = $request->categoria_id;
        $producto->save();

        return redirect()-> route('productos.index');
        
        
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
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view('productos.editar')
            ->with('producto', $producto)
            ->with('categorias', $categorias);
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
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);

        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion= $request->descripcion;
        $producto->precio = $request->precio;
        $producto->imagen = 'Imagen de prueba';
        $producto->categoria_id = $request->categoria_id;

        $producto->save();

        return redirect()-> route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()-> route('productos.index');

    }
}
