@extends('layouts.app')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">

                    
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    
                    <a href="{{ route('descargarPDF')}}" class="btn btn-sm btn-primary">Descargar PDF</a>  
                    
                    <span class="card-title">Lista de clientes</span>
                        <div class="float-right">
                            <a href="{{ route('clientes.create') }}">
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
                                                        <a href="{{ route('clientes.edit', $cliente->id) }}">
                                                            <button class="btn btn-primary btn-sm">
                                                                Editar
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="btn-group" role="group" aria-label="eliminar-cliente">
                                                        <form action="{{ route('clientes.destroy', $cliente->id) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
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
@endsection
