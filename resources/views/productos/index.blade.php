@extends('layouts.app')

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <span class="card-title">Listado de ventas</span>
                        <div class="float-right">
                            <a href="{{ route('ventas.create') }}">
                                <button class="btn btn-success btn-sm my-1 mb-3">
                                    Crear
                                </button>
                            </a>
                            <table class="table table-striped nt-4">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Descripcion</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $producto->nombre }}</td>
                                                        <td>{{ $producto->descripcion }}</td>
                                                        <td>{{ $producto->precio }}</td>
                                                        <td>{{ $producto->categoria->nombre }}</td>
                                                        <td>
                                                            <div class="d-flex justify-content-sm-center">
                                                                <a href="{{ route('productos.edit', $producto->id) }}">
                                                                    <button class="btn btn-primary btn-sm">
                                                                        Editar
                                                                    </button>
                                                                </a>
                                                                <form
                                                                    action="{{ route('productos.destroy', $producto->id) }}"
                                                                    method="post">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger btn-sm mx-1">
                                                                        Eliminar
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </table>
                                                </div>
                                            </div>
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
