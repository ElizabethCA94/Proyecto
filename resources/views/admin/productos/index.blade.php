@extends('adminlte::page')

@section('title', 'Productos')

@section('plugins.bootstrapSwitch', true)
@section('plugins.bootstrapColorpicker', true)
@section('plugins.bootstrap4DualListbox', true)
@section('plugins.bootstrapSlider', true)
@section('plugins.datatables', true)
@section('plugins.datatablesPlugins', true)

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <a href="{{ route('descargarPDFProductos') }}" class="btn btn-sm btn-primary">Descargar PDF</a>
                        <div class="float-right">
                            <a href="{{ route('admin.productos.create') }}">
                                <button class="btn btn-success btn-sm my-1 mb-3">
                                    Crear
                                </button>
                            </a>
                        </div>
                    </div>
                    <span class="card-title">Lista de productos</span>
                    <div class="table-responsive">
                        <table class="table table-striped nt-4">
                            <thead>
                                <tr>
                                    <th class="border px-4 py-2 mx-1">#</th>
                                    <th class="border px-4 py-2">Nombre</th>
                                    <th class="border px-4 py-2">Descripcion</th>
                                    <th class="border px-4 py-2">Precio</th>
                                    <th class="border px-4 py-2">Precio en Dolar</th>
                                    <th class="border px-2 py-2 mx-1">Imagen</th>
                                    <th class="border px-4 py-2">Categoria</th>
                                    <th class="border px-4 py-2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->descripcion }}</td>
                                        <td>{{ $producto->precio }}</td>
                                        <td>{{ $producto->precio / $precioDolar }}</td>
                                        <td>
                                            <img class="px-1" src="/imagen/{{ $producto->imagen }}" width="90%">
                                        </td>
                                        <td>
                                            @if ($producto->categoria)
                                                {{ $producto->categoria->nombre }}
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-sm-center">
                                                
                                                @can('admin.productos.edit')
                                                    <a href="{{ route('admin.productos.edit', $producto->id) }}">
                                                        <button class="btn btn-primary btn-sm">
                                                            Editar
                                                        </button>
                                                    </a>
                                                @endcan
                                                @can('admin.productos.show')
                                                <a href="{{ route('admin.productos.show', $producto->id) }}">
                                                    <button class="btn btn-primary btn-sm">
                                                        Mostrar
                                                    </button>
                                                </a>
                                            @endcan
                                                @can('admin.productos.destroy')
                                                    <form action="{{ route('admin.productos.destroy', $producto->id) }}"
                                                        method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm mx-1">
                                                            Eliminar
                                                        </button>
                                                    </form>
                                                @endcan
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
        @stop
