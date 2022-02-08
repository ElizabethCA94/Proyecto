<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA DE PRODUCTOS</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Precio</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                <br><br><br>
                    <th scope="row">{{$producto->id}}</th>
                    <td>{{ $producto->nombre}}</td>
                    <td>{{ $producto->descripcion}}</td>
                    <td>{{ $producto->precio}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>