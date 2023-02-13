<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
    <title>Ver alumno</title>
</head>
<body class="container">
    <div class="card d-flex justify-content-center align-items-center">
        <p>DNI: {{$student[0]->dni}}</p>
        <p>Nombre: {{$student[0]->name}}</p>
        <p>Teléfono: {{$student[0]->phone}}</p>
        <p>{{$student[0]->address}}</p>
    </div>

    @if(isset($evaluations))
        @foreach($modules as $module)
            @foreach($evaluations as $evaluation)
                @if($evaluation->idModule == $module->id && $evaluation->evaluationDate != "1111-11-11")
                    <p>{{$module->name}} - {{$evaluation->note}} <input type="date" value="{{$evaluation->evaluationDate}}" /></p>
                @endif
            @endforeach
        @endforeach
    @else
        <p>No existe</p>
    @endif

    <a href="{{route('students')}}"><button class="btn btn-primary">Volver</button></a>
</body>
</html>