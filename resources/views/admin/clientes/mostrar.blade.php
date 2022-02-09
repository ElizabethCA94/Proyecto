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
                        <span class="card-title text-center">Mostrar cliente</span>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" disabled
                                    value={{ $cliente->nombre }}>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" disabled
                                    value={{ $cliente->apellido }}>
                            </div>
                            <div class="form-group">
                                <label for="precio">Telefono</label>
                                <input type="text" class="form-control" name="Telefono" id="Telefono" disabled
                                    value={{ $cliente->telefono }}>
                            </div>
                            <div class="form-group">
                                <label for="precio">Direccion</label>
                                <input type="text" class="form-control" name="direccion" id="direccion" disabled
                                    value={{ $cliente->direccion }}>
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
        @stop
