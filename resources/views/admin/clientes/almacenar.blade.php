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
                    <div class="card-header">
                        <div class="card-title text-center">Creación de clientes</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.clientes.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre"></label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="apellido"></label>
                                <input type="text" class="form-control" name="apellido" id="apellido"
                                    placeholder="Apellido" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="telefono"></label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Telefono" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="direccion"></label>
                                <input type="text" class="form-control" name="direccion" id="direccion"
                                    placeholder="Direccion" autocomplete="off">
                            </div>
                            <div class="btn-group" role="group" aria-label="crear-cliente">
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

