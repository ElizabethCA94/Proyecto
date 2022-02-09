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
                        <a href="{{ route('descargarPDF') }}" class="btn btn-sm btn-primary">Descargar PDF</a>
                        <span class="card-title">Lista de clientes</span>
                        <div class="float-right">
                            @can('admin.clientes.create')
                                <a href="{{ route('admin.clientes.create') }}">
                                    <button class="btn btn-success btn-sm my-1 mb-3 float-right">
                                        Crear
                                    </button>
                                </a>
                            @endcan
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>Direccion</th>
                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $cliente->nombre }}</td>
                                            <td>{{ $cliente->apellido }}</td>
                                            <td>{{ $cliente->telefono }}</td>
                                            <td>{{ $cliente->direccion }}</td>
                                            <td>
                                                <div class="d-flex justify-content-sm-center">
                                                    <div class="btn-group" role="group" aria-label="editar-cliente">
                                                        @can('admin.clientes.edit')
                                                            <a href="{{ route('admin.clientes.edit', $cliente->id) }}">
                                                                <button class="btn btn-primary btn-sm">
                                                                    Editar
                                                                </button>
                                                            </a>
                                                        @endcan
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="ver-cliente">
                                                        @can('admin.clientes.show')
                                                            <a href="{{ route('admin.clientes.show', $cliente->id) }}">
                                                                <button class="btn btn-success btn-sm mx-1">
                                                                    Mostrar
                                                                </button>
                                                            </a>
                                                        @endcan
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="eliminar-cliente">
                                                        @can('admin.clientes.destroy')
                                                            <form action="{{ route('admin.clientes.destroy', $cliente->id) }}"
                                                                method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-sm mx-1">
                                                                    Eliminar
                                                                </button>
                                                            @endcan
                                                        </form>
                                                    </div>
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
