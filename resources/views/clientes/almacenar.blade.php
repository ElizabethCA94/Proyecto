<!DOCTYPE html>
<html lang="en">
@include('partes.head')

<body>
    <div id="cuerpo-pagina" class="container text-center">
        <h4>Creación de clientes</h4>
        <form action="{{route('clientes.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre"></label>
                <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombre" >
            </div>
            <div class="form-group">
                <label for="apellido"></label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellido" >
            </div>
            <div class="form-group">
                <label for="telefono"></label>
                <input type="text" class="form-control" name="telefonos" id="telefonos" placeholder="Telefono" >
            </div>
            <div class="form-group">
                <label for="direccion"></label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" >
            </div>
            <button type="submit" class="btn btn-primary mt-4">Crear</button>
        </form>
    </div>
</body>
</html>