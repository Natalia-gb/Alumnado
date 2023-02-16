<html>
    <head>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
        <title>Editar Módulo</title>
    </head>
    <body class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-warning mt-5" role="alert">
                {{ $error }}
            </div>
            @endforeach
        @endif

        <form action="{{ route('updateModule', $module[0]->id) }}" method='GET'>
            @csrf
            <input type="hidden" value="{{$module[0]->id}}" name="id">
            <label class="form-label">Nombre: <input type="text" name='name' value="{{ $module[0]->name }}" class="form-control"></label>
            <label class="form-label">Créditos: <input type="number" name='credits' value="{{ $module[0]->credits }}" class="form-control"></label>
            <label class="form-label">Horas Semanales: <input type="number" name='weeklyHours' value="{{ $module[0]->weeklyHours }}" class="form-control"></label>
            <button class="btn btn-primary">Guardar cambios</button>
        </form>
    </body>
</html>