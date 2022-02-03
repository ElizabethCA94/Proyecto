<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container text-center">
        <h4>Edición de ventas</h4>
        <form action="{{route('ventas.update', $venta->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                
                <label for="cliente_id">Cliente</label>
                <select class="custom-select" name="cliente_id" id="cliente_id">
                    @foreach ($clientes as $cliente)
                        <option
                        value="{{ $cliente->id }}">
                        {{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="productoIds">Productos</label>
                <select class="custom-select" multiple name="productoIds[]" id="productoIds">
                    @foreach ($productos as $producto)
                        <option
                            value="{{ $producto->id }}">
                            {{ $producto->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Editar</button>
        </form>
        @if(isset($errors) && $errors->any())
            <div class="iq-card-header d-flex justify-content-between">
                <div class="alert alert-danger col-md-12 mt-2">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{!!$error!!}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
</body>
</html>