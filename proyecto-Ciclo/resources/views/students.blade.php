<html>
    <head>
        <title>Alumnado</title>
    </head>
    <body class='container'>
        @extends('/layouts/master')
        @section('header')
        @endsection

        @section('content')
        <a href="{{route('createStudent')}}">
            <button class="btn btn-success mt-3 mb-3"><i class="bi bi-plus-circle"></i></button>
        </a>
        <table class='table table-secondary table-striped'>
            <tr class="text-center">
                <th>DNI</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
            @foreach($students as $student)
                <tr class='text-center'>
                    <td>{{$student->dni}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <a href="{{route('viewStudent', $student->dni)}}">
                            <button class="btn btn-success" style="margin-bottom:0.3em"><i class="bi bi-eye"></i></button>
                        </a>
                        <form action="{{route('deleteStudent')}}" method="POST">
                            @csrf
                            <input type="hidden" name="dni" value="{{$student->dni}}">
                            <button class="btn btn-danger" style="margin-bottom:-0.7em;"><i class="bi bi-trash"></i></button>
                        </form>
                        <a href="{{ route('editStudent', $student->dni )}}">
                            <button class='btn btn-info'><i class="bi bi-pencil-square"></i></button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

    @endsection
    </body>
</html>