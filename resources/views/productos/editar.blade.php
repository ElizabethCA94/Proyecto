<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container text-center">
        <h4>Edición de productos</h4>
        <form action="{{route('productos.update', $producto->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nombre"></label>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre" value={{$producto->nombre}}>
            </div>
            <div class="form-group">
                <label for="descripcion"></label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" value={{$producto->descripcion}}>
            </div>
            <div class="form-group">
                <label for="precio"></label>
                <input type="text" class="form-control" name="precios" id="precios" placeholder="Precio" value={{$producto->precio}}>
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