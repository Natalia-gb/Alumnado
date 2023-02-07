<?php

namespace App\Http\Controllers;
use App\Models\Module;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function index() {
        $modules = Module::all();
        return view('modules', ['modules' => $modules]);
    }

    public function edit($id) {
        $module = Module::where('dni', $dni)->get();
        $modules = Student::find($dni)->modules;
        $evaluations = Student::find($dni)->evaluations;
        return view('editStudent', ['student' => $student, 'modules' => $modules, 'evaluations' => $evaluations]);
    }

}