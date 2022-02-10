<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Http;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:admin.productos.index')->only('index');
        $this->middleware('can:admin.productos.edit')->only('edit', 'update');
        $this->middleware('can:admin.productos.create')->only('create', 'store');
        $this->middleware('can:admin.productos.show')->only('show');
        $this->middleware('can:admin.productos.destroy')->only('destroy');
    }
    public function index()
    {
        $respuesta = Http::get('https://free.currconv.com/api/v7/convert?q=USD_COP&compact=ultra&apiKey=235c156296f183d5d706');
        $precioDolar = $respuesta['USD_COP'];

        $productos = Producto::all();
        // //retorne una vista 
        return view('admin.productos.index', compact('productos', 'precioDolar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.productos.almacenar', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required|image|max:1024',
        ]);
        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $imagenProducto = date('YmdHis'). "." .$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $imagenProducto);
        }

        //instancia de la clase Productos, -> son campos de la bd y -> son name del formulario
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion= $request->descripcion;
        $producto->precio = $request->precio;
        $producto->imagen =  $imagenProducto;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();

        return redirect()-> route('admin.productos.index');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        return view('admin.productos.mostrar', compact('producto'));

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
        return view('admin.productos.editar')
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
        
        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $imagenProducto = date('YmdHis'). "." .$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $imagenProducto);
        }
        else{
            unset($producto->imagen);
        }

        $producto->nombre = $request->nombre;
        $producto->descripcion= $request->descripcion;
        $producto->precio = $request->precio;
        $producto->imagen = $imagenProducto;
        $producto->categoria_id = $request->categoria_id;

        $producto->save();

        return redirect()-> route('admin.productos.index');
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
        return redirect()-> route('admin.productos.index');

    }
}
