@extends('adminlte::page')

@section('title', 'Ventas')

@section('plugins.bootstrapSwitch', true)
@section('plugins.bootstrapColorpicker', true)
@section('plugins.bootstrap4DualListbox', true)
@section('plugins.bootstrapSlider', true)
@section('plugins.datatables', true)
@section('plugins.datatablesPlugins', true)

@section('content_header')
    <h1>Ventas</h1>
@stop

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title text-center">Mostrar venta</span>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="cliente">Cliente</label>
                                <input type="text" class="form-control" name="cliente" id="cliente" disabled
                                    value={{ $venta->cliente->nombre }}>
                            </div>
                            @foreach ($venta->productos as $producto)
                            <div class="form-group">
                                <label for="producto">Producto</label>
                                <input type="text" class="form-control" name="producto" id="producto" disabled
                                    value={{ $producto->nombre  }}>
                            </div>
                            @endforeach
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
