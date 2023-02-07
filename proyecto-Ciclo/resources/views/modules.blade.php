<html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
        <title>Módulos</title>
    </head>
    <body class="container mt-5">
        <table class="table table-secondary table-striped">
            <tr class="text-center">
                <th>Nombre</th>
                <th>Créditos</th>
                <th>Horas Semanales</th>
                <th>Acciones</th>
            </tr>
            @foreach ($modules as $module)
                <tr class="text-center">
                    <td>{{$module->name}}</td>
                    <td>{{$module->credits}}</td>
                    <td>{{$module->weeklyHours}}</td>
                    <td>
                        <button class="btn btn-success">Ver</button>
                        <button class="btn btn-info">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </table>

        <a href="{{ route('students') }}"><button class="btn btn-info">Ver Estudiantes</button></a>
    </body>
</html>