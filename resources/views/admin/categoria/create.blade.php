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
                    <div class="card-header">
                        <div class="card-title text-center">Creación de categorias</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.categoria.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre"></label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"
                                    autocomplete="off">
                            </div>
                            <div class="btn-group" role="group" aria-label="crear-categoria">
                                <button type="submit" class="btn btn-primary mt-4">Crear</button>
                            </div>
                        </form>
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

