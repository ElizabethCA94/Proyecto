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
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Modificar Categoria</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.categoria.update', $categoria->id) }}"  role="form" enctype="multipart/form-data" autocomplete="off">
                            @method('PUT')
                            @csrf

                            @include('categoria.form')

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
