<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js' integrity='sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Ver alumno</title>
</head>
<body class="container">
    @extends('/layouts/master')
    @section('header')
    @endsection

    @section('content')
    <div class="card d-flex align-items-center mt-5" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$student[0]->name}}</h5>
        <p class="card-text"><i class="bi bi-person-vcard me-3"></i>{{$student[0]->dni}}</p>
        <p class="card-text"><i class="bi bi-telephone-fill me-3"></i> {{$student[0]->phone}}</p>
        <p class="card-text"><i class="bi bi-geo-alt-fill me-3"></i>{{$student[0]->address}}</p>
      </div>
    </div>

    <table class="table table-striped table-secondary w-25 mt-3">
        <tbody>
            @foreach($modules as $module)
                <tr>
                    <td>{{$module->name}}</td>
                    <td><a href="{{route('createEvaluation', $module->id)}}"><button class="btn btn-success"><i class="bi bi-plus-circle"></button></a></td>
                </tr>
                @endforeach
        </tbody>
    </table>

    @if(isset($evaluations))
    <div class="w-100 d-flex flex-wrap justify-content-center mb-5">
        @foreach($modules as $module)
            @foreach($evaluations as $evaluation)
                @if($evaluation->idModule == $module->id)

                    <div class="card d-flex mt-5 me-5" style="width: 18rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{$module->name}}</h5>
                          <p class="card-text"><i class="bi bi-card-checklist me-3"></i>{{$evaluation->note}}</p>
                          <p class="card-text"><i class="bi bi-calendar2 me-3"></i> {{substr($evaluation->evaluationDate,0,10)}}</p>
                          <form action="{{ route('editEvaluation', $evaluation->evaluationDate) }}">
                            @csrf
                            <input type="hidden" value="{{$evaluation->evaluationDate}}" />
                            <button class="btn btn-warning">Editar nota</button>
                          </form>
                        </div>
                    </div>
                    
                @endif
            @endforeach
        @endforeach
        </div>
    @endif
    @endsection
</body>
</html>