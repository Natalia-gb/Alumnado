<html>
    <head>
        <title>Módulos</title>
    </head>
    <body class="container">
        @extends('/layouts/master')
        @section('header')
        @endsection

        @section('content')
        <a href="{{route('createModule')}}">
            <button class="btn btn-success mb-3 mt-3"><i class="bi bi-plus-circle"></i></button>
        </a>
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
                        <a href="{{ route('viewModule', $module->id) }}">
                            <button class="btn btn-success" style="margin-bottom:0.3em"><i class="bi bi-eye"></i></button>
                        </a>

                        <form action="{{route('deleteModule')}}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $module->id }}">
                            <button class="btn btn-danger" style="margin-bottom:-0.7em;"><i class="bi bi-trash"></i></button>
                        </form>
                        
                        <a href="{{route('editModule', $module->id)}}">
                            <button class="btn btn-info"><i class="bi bi-pencil-square"></i></button>
                        </a>
                        
                    </td>
                </tr>
            @endforeach
        </table>
    @endsection
    </body>
</html>