@extends('layouts.app')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-title text-center">Creación de ventas</div>
                    </div>
                    <div class="card-body">
                        <div class="form-group pt-2">
                            <label for="cliente_id">Cliente</label>
                            <select class="form-select" aria-label="cliente" name="cliente_id" id="cliente_id">
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="productoIds">Productos</label>
                            <select class="form-select" aria-label="productos" multiple name="productoIds[]"
                                id="productoIds">
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="btn-group" role="group" aria-label="crear-venta">
                            <button type="button" class="btn btn-primary mt-4">Crear</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
