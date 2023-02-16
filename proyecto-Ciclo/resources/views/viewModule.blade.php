<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver módulo</title>
</head>
<body class="container">
    @extends('/layouts/master')
    @section('header')
    @endsection

    @section('content')
    <div class="card d-flex justify-content-center align-items-center w-50">
        <p>ID: {{$module[0]->id}}</p>
        <p>Nombre: {{$module[0]->name}}</p>
        <p>Créditos: {{$module[0]->credits}}</p>
        <p>Horas semanales: {{$module[0]->weeklyHours}}</p>
    </div>

    <div class="d-flex flex-wrap justify-content-center">
    @foreach($students as $student)
        <div class="card d-flex align-items-center mt-5" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$student->name}}</h5>
              <p class="card-text"><i class="bi bi-person-vcard me-3"></i>{{$student->dni}}</p>
              <p class="card-text"><i class="bi bi-telephone-fill me-3"></i> {{$student->phone}}</p>
              <p class="card-text"><i class="bi bi-geo-alt-fill me-3"></i>{{$student->address}}</p>
              <p class="card-text"><a href="{{route('viewStudent', $student->dni)}}"><button class="btn btn-success" style="margin-bottom:0.3em"><i class="bi bi-eye"></i></button></a></p>
            </div>
        </div>
    @endforeach
    </div>
    @endsection
</body>
</html>