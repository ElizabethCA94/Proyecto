<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container text-center">
        <h4>Lista de clientes</h4>
        <a href="{{route('clientes.create')}}">
            <button class="btn btn-success btn-sm my-1 mb-3">
                Crear
            </button>
        </a>
        
        <table class="table table-striped nt-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cliente->nombre}}</td>
                    <td>{{$cliente->apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>
                        <div class="d-flex justify-content-sm-center">
                            <a href="{{route('clientes.edit',$cliente->id)}}">
                                <button class="btn btn-primary btn-sm">
                                    Editar
                                </button>
                            </a>
                            <form action="{{route('clientes.destroy',$cliente->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm mx-1">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>