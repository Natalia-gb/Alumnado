<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students', ['students' => $students]);
    }

    public function edit($dni) {
        $student = Student::where('dni', $dni)->get();
        $modules = Student::find($dni)->modules;
        $evaluations = Student::find($dni)->evaluations;
        var_dump($modules);
        var_dump($evaluations);
        return view('editStudent', ['student' => $student, 'modules' => $modules, 'evaluations' => $evaluations]);
    }

    public function update(Request $r) {
        $r->validate([
            'name' => 'required',
            'phone' => 'required|integer|min:600000000|max:999999999',
            'address' => 'required'
        ]);

        $dni = request('dni');
        $name = request('name');
        $phone = request('phone');
        $address = request('address');

        $student = Student::where('dni', $dni)->update([
            'name' => $name,
            'phone' => $phone,
            'address' => $address
        ]);

        return redirect()->action([StudentController::class, 'index']);
    }
}
