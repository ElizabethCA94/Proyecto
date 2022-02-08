@extends('layouts.app')

@section('content')
    <div class="content container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista de categorias') }}
                            </span>

                            <div class="float-right">
                                @can('admin.categorias.create')
                                <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                @endcan
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categorias as $categoria)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $categoria->nombre }}</td>

                                            <td>
                                                @can('admin.categorias.destroy')
                                                <form action="{{ route('categorias.destroy', $categoria->id) }}"
                                                    method="POST">
                                                @endcan
                                                    <a class="btn btn-sm btn-primary "
                                                    @can('admin.categorias.show')
                                                        href="{{ route('categorias.show', $categoria->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> Show</a>
                                                    @endcan
                                                    <a class="btn btn-sm btn-success"
                                                    @can('admin.categorias.edit')
                                                        href="{{ route('categorias.edit', $categoria->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> Edit</a>
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    @endcan
                                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $categorias->links() !!}
            </div>
        </div>
    </div>
@endsection
