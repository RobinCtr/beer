<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-5 mb-0"></h1>
            
        </div>
        <p class="lead text-secondary">Usuarios Registrados en la Base de Datos</p>
        <p class="lead text-secondary">Fecha: {{$date}}</p>
        <ul class="list-group">
            
                <table class="table">
                    <tr>
                                <th> Id </th>
                                <th> Nombre completo </th>
                                <th> Telefono </th>
                                <th> Correo </th>
                                <th> Estatus</th>
                    </tr>
                   
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>
                                <span class="pl-2">{{ $usuario->id}}</span>
                            </td>
                            <td> {{ $usuario->nombreCompleto}} </td>
                            <td> {{ $usuario->telefono}} </td>
                            <td> {{ $usuario->correo}} </td>
                            <td> {{ $usuario->estatus}}</td>
                        </tr>
                    @endforeach
                </table>
        </ul>
    </div>
</body>
</html>