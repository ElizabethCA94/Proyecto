<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container text-center">
        <h4>Lista de productos</h4>
            <a href="{{route('productos.create')}}">
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
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->precio}}</td>
                        <td>
                            <div class="d-flex justify-content-sm-center">
                                <a href="{{route('productos.edit',$producto->id)}}">
                                    <button class="btn btn-primary btn-sm">
                                        Editar
                                    </button>
                                </a>
                                <form action="{{route('productos.destroy',$producto->id)}}" method="post">
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