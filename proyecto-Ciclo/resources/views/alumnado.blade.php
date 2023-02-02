<html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
        <title>Alumnado</title>
    </head>
    <body>
        <table class='table-secondary table-striped'>
            <tr class="text-center">
                <td>DNI</td>
                <td>Nombre</td>
                <td>Teléfono</td>
                <td>Dirección</td>
            </tr>
            @foreach ($alumnos as $alumno)
                <tr class='text-center'>
                    <td>{{$alumno->DNI}}</td>
                    <td>{{$alumno->name}}</td>
                    <td>{{$alumno->phone}}</td>
                    <td>{{$alumno->address}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>