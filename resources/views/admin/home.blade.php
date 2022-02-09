@extends('adminlte::page')

@section('title', 'API')

@section('plugins.bootstrapSwitch', true)
@section('plugins.bootstrapColorpicker', true)
@section('plugins.bootstrap4DualListbox', true)
@section('plugins.bootstrapSlider', true)
@section('plugins.datatables', true)
@section('plugins.datatablesPlugins', true)

@section('content_header')
    <h1>Consumo API</h1>
@stop

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-title text-center">Precio del dolar en Colombia</div>
                    </div>
                    <table class="table table-striped nt-3">
                        <thead>
                            <tr>
                                <th>DIVISA</th>
                                <th>VALOR</th>
                                <th>FECHA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $datos['result']['target'] }}</td>
                                <td>{{ $datos['result']['value'] }}</td>
                                <td>{{ $datos['result']['updated'] }}</td>
                            </tr>
                        </tbody>
                    </table>
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
