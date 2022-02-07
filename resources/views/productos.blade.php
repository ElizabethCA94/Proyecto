<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA DE PRODUCTOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                    <th scope="col">Categoria</th>

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
                    <td>{{ $producto->categoria}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>