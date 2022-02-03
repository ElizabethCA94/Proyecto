<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container">
        <div class="text-center">
            <h4>Lista de ventas</h4>
            <a href="{{route('ventas.create')}}">
                <button class="btn btn-success btn-sm my-1 mb-3">
                    Crear
                </button>
            </a>
        </div>
        

        @foreach ($ventas as $venta)
        {{-- {{$venta->cliente}} --}}

            <div class="card mb-3">
                <div class="card-body">
                    <div>
                        <div><strong>Cliente:</strong> {{ $venta->cliente->nombre }}</div>
                        <div><strong>Venta:</strong> {{ $venta->id }}</div>
                        <div class="d-flex my-2">
                            <a href="{{route('ventas.edit',$venta->id)}}">
                                <button class="btn btn-primary btn-sm">
                                    Editar
                                </button>
                            </a>
                            <form action="{{route('ventas.destroy',$venta->id)}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm mx-1">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                    <table class="table table-striped nt-3">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Operaciones</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            @foreach ($venta->productos as $producto)
                                <tr>
                                    <td>{{$producto->nombre }}</td>
                                    <td>
                
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach

        
    </div>
</body>

</html>