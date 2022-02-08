@extends('adminlte::page')

@section('title', 'Clientes')

@section('plugins.bootstrapSwitch', true)
@section('plugins.bootstrapColorpicker', true)
@section('plugins.bootstrap4DualListbox', true)
@section('plugins.bootstrapSlider', true)
@section('plugins.datatables', true)
@section('plugins.datatablesPlugins', true)

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="card-title">Lista de ventas</span>
                        <div class="float-right">
                            <a href="{{ route('admin.ventas.create') }}">
                                <button class="btn btn-success btn-sm my-1 mb-3">
                                    Crear
                                </button>
                            </a>
                        </div>
                    </div>
                    @foreach ($ventas as $venta)
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <div>
                                        <div><strong>Cliente:</strong> {{ $venta->cliente->nombre }}</div>
                                        <div><strong>Venta:</strong> {{ $venta->id }}</div>
                                        <div class="d-flex my-2">
                                            <a href="{{ route('admin.ventas.edit', $venta->id) }}">
                                                <button class="btn btn-primary btn-sm">
                                                    Editar
                                                </button>
                                            </a>
                                            <form action="{{ route('admin.ventas.destroy', $venta->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm mx-1">
                                                    Eliminar
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <table class="table table-striped nt-3">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Operaciones</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($venta->productos as $producto)
                                                <tr>
                                                    <td>{{ $producto->nombre }}</td>
                                                    <td>
                                                        <div class="d-flex justify-content-sm-center">
                                                            <div class="btn-group" role="group" aria-label="editar-venta">
                                                                <a href="{{ route('admin.ventas.edit', $venta->id) }}">
                                                                    <button class="btn btn-primary btn-sm">
                                                                        Editar
                                                                    </button>
                                                                </a>
                                                            </div>
                                                            <div class="btn-group" role="group" aria-label="eliminar-venta">
                                                                <form action="{{ route('admin.ventas.destroy', $venta->id) }}" method="post">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit" class="btn btn-danger btn-sm mx-1">
                                                                        Eliminar
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    
    @stop
    
    @section('js')
        <script>
            < script src = "{{ asset('js/app.js') }}"
            defer >
        </script>
    
        </script>
    @stop

