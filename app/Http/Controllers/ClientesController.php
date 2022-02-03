<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        //retorne una vista 
        return view('clientes.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('clientes.almacenar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //instancia de la clase Clientes, -> son campos de la bd y -> son name del formulario
        $cliente = new Cliente();
        $cliente->nombre = $request->nombres;
        $cliente->apellido= $request->apellidos;
        $cliente->telefono = $request->telefonos;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        return redirect()-> route('clientes.index');   
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
        $cliente = Cliente::find($id);
        return view('clientes.editar')->with('cliente', $cliente);
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
            'nombres' => 'required',
            'apellidos' => 'required',
            'telefonos' => 'required',
            'direccion' => 'required',
        ]);

        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombres;
        $cliente->apellido= $request->apellidos;
        $cliente->telefono = $request->telefonos;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        return redirect()-> route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()-> route('clientes.index');

    }
}
