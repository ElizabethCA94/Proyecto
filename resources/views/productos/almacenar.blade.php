@extends('layouts.app')

@section('content')
    <section class="content container">
        <div class="row ">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-title text-center">Creación de productos</div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('productos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nombre"></label>
                                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion"></label>
                                <input type="text" class="form-control" name="descripcion" id="descripcion"
                                    placeholder="Descripcion" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="precio"></label>
                                <input type="text" class="form-control" name="precios" id="precios" placeholder="Precio"
                                    autocomplete="off" required>
                            </div>
                            <div class="form-group pt-2">
                                <label for="categoria_id">Categoria</label>
                                <select class="form-select" aria-label="categoría" name="categoria_id" id="categoria_id">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="btn-group" role="group" aria-label="crear-producto">
                                <button type="button" class="btn btn-primary mt-3">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
