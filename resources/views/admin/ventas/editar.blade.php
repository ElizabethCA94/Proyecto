@extends('layouts.app')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-title text-center">Edición de ventas</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('ventas.update', $venta->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group pt-2">
                                <label for="cliente_id">Cliente</label>
                                <select class="form-select" aria-label="cliente" name="cliente_id" id="cliente_id">
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}"
                                            {{ $cliente->id == $venta->cliente_id ? 'selected' : '' }}
                                        >
                                            {{ $cliente->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group pt-2">
                                <label for="productoIds">Productos</label>
                                <select class="form-select" aria-label="productos" multiple name="productoIds[]"
                                    id="productoIds">
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}">
                                            {{ $producto->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="btn-group" role="group" aria-label="editar-venta">
                                <button type="submit" class="btn btn-primary mt-3">Editar</button>
                            </div>
                        </form>
                        @if (isset($errors) && $errors->any())
                            {{-- <div class="iq-card-header d-flex justify-content-between"> --}}
                            <div class="invalid-feedback"></div>
                            <div class="alert alert-danger col-md-12 mt-2">
                                @foreach ($errors->all() as $error)
                                    <div>{!! $error !!}</div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
    </section>
@endsection
