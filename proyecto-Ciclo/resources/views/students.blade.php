<html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
        <title>Alumnado</title>
    </head>
    <body class='container mt-5'>
        <table class='table table-secondary table-striped'>
            <tr class="text-center">
                <th>DNI</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
            @foreach ($students as $student)
                <tr class='text-center'>
                    <td>{{$student->dni}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <button class="btn btn-success">Ver</button>
                        <a href="{{ route('editStudent', $student->dni )}}">
                            <button class='btn btn-info'>Editar alumno</button>
                        </a>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('modules') }}"><button class="btn btn-info">Ver</button></a>
    </body>
</html>