<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container">
        <h4 class="text-center">Creación de ventas</h4>
        <form  action="{{route('ventas.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="cliente_id">Cliente</label>
                <select class="custom-select" name="cliente_id" id="cliente_id">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="productoIds">Productos</label>
                <select class="custom-select" multiple name="productoIds[]" id="productoIds">
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Crear</button>
        </form>
    </div>
</body>
</html>