<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumnado;

class AlumnadoController extends Controller
{
    public function index() {
        $alumnos = Alumnado::all();
        return view('alumnado', ['alumnos' => $alumnos]);
    }
}
