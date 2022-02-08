<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF de Clientes</title>
</head>
<body>
    
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                <tr>
                <br><br><br>
                    <th scope="row">{{$cliente->id}}</th>
                    <td>{{ $cliente->nombre}}</td>
                    <td>{{ $cliente->apellido}}</td>
                    <td>{{ $cliente->telefono}}</td>
                    <td>{{ $cliente->direccion}}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>