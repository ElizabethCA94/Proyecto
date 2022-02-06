<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container">
        <h4 class="text-center">Edición de productos</h4>
        <form action="{{route('productos.update', $producto->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value={{$producto->nombre}}>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" value={{$producto->descripcion}}>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value={{$producto->precio}}>
            </div>
            <div class="form-group">
                <label for="cliente_id">Categoria</label>
                <select class="custom-select" name="categoria_id" id="categoria_id">
                    @foreach ($categorias as $categoria)
                        <option
                        value="{{ $categoria->id }}" {{ $categoria->id == $producto->categoria_id ? 'selected' : ''}}>
                            {{ $categoria->nombre }} 
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Editar</button>
        </form>
        @if(isset($errors) && $errors->any())
            <div class="iq-card-header d-flex justify-content-between">
                <div class="alert alert-danger col-md-12 mt-2" role="alert">
                        @foreach($errors->all() as $error)
                            {!!$error!!}
                        @endforeach
                </div>
            </div>
        @endif
    </div>
</body>
</html>