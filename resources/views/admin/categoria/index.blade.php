@extends('adminlte::page')

@section('title', 'Categorias')

@section('plugins.bootstrapSwitch', true)
@section('plugins.bootstrapColorpicker', true)
@section('plugins.bootstrap4DualListbox', true)
@section('plugins.bootstrapSlider', true)
@section('plugins.datatables', true)
@section('plugins.datatablesPlugins', true)

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">0
                        <span class="card-title">Lista de categorias</span>
                        <div class="float-right">
                            @can('admin.categorias.create')
                            <a href="{{ route('categorias.create') }}">
                            @endcan
                                <button class="btn btn-success btn-sm my-1 mb-3 float-right">
                                    Crear
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $categoria->nombre }}</td>
                                            <td>
                                                <div class="d-flex justify-content-sm-center">
                                                    <div class="btn-group" role="group" aria-label="editar-categoria">
                                                        @can('admin.categorias.edit')
                                                        <a href="{{ route('categorias.edit', $categoria->id) }}">
                                                        @endcan
                                                            <button class="btn btn-primary btn-sm">
                                                                Editar
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="eliminar-categoria">
                                                    @can('admin.categorias.destroy')
                                                        <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            @endcan
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

