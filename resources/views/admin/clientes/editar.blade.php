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
                        <span class="card-title text-center">Edición de clientes</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.clientes.update', $cliente->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="nombre"></label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre"
                                    autocomplete="off" value={{ $cliente->nombre }}>
                            </div>
                            <div class="form-group">
                                <label for="apellido"></label>
                                <input type="text" class="form-control" name="apellido" id="apellido"
                                    placeholder="Apellido" autocomplete="off" value={{ $cliente->apellido }}>
                            </div>
                            <div class="form-group">
                                <label for="telefono"></label>
                                <input type="text" class="form-control" name="telefono" id="telefono"
                                    placeholder="Telefono" autocomplete="off" value={{ $cliente->telefono }}>
                            </div>
                            <div class="form-group">
                                <label for="direccion"></label>
                                <input type="text" class="form-control" name="direccion" id="direccion"
                                    placeholder="Direccion" autocomplete="off" value={{ $cliente->direccion }}>
                            </div>
                            <div class="btn-group" role="group" aria-label="editar-cliente">
                                <button type="submit" class="btn btn-primary mt-3">Editar</button>
                            </div>
                        </form>
                        @if (isset($errors) && $errors->any())
                            <div class="iq-card-header d-flex justify-content-between">
                                <div class="alert alert-danger col-md-12 mt-2" role="alert">
                                    @foreach ($errors->all() as $error)
                                        {!! $error !!}
                                    @endforeach
                                </div>
                            </div>
                        @endif
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

