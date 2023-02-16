<html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
        <title>Editar Alumno</title>
    </head>
    <body class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning mt-5" role="alert">
                {{ $error }}
            </div>
            @endforeach
        @endif

        <form action="{{ route('updateStudent', $student[0]->dni) }}" method='GET'>
            @csrf
            <input type="hidden" value="{{$student[0]->dni}}" name="dni">
            <label class="form-label">Nombre: <input type="text" name='name' value="{{ $student[0]->name }}" class="form-control"></label>
            <label class="form-label">Teléfono: <input type="number" name='phone' value="{{ $student[0]->phone }}" class="form-control"></label>
            <label class="form-label">Dirección: <input type="text" name='address' value="{{ $student[0]->address }}" class="form-control"></label>
            <button class="btn btn-primary">Guardar cambios</button>
        </form>
    </body>
</html>