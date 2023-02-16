<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Session;
use App\Models\Module;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    public function create($idModule){
        $module = Module::where('id', $idModule)->get();
        return view('createEvaluation', ['module' => $module]);
    }

    public function make($id){
        request()->validate([
            'note' => 'required|integer|min:0|max:10',
        ]);

        $evaluation = new Evaluation;
        $evaluation -> dni = Session::get('dni');
        $evaluation -> idModule = $id;
        $evaluation -> note = request('note');
        $evaluation -> evaluationDate = date('Y-m-d H:i:s');
        $evaluation->save();

        $student = Student::where('dni', Session::get('dni'))->get();
        $modules = Student::find(Session::get('dni'))->modules;
        $evaluations = Student::find(Session::get('dni'))->evaluations;
        return view('viewStudent', ["student" => $student, "modules" => $modules, "evaluations" => $evaluations]);
    }

    public function edit($evaluationDate){
        $evaluation = Evaluation::where('evaluationDate', $evaluationDate)->get();
        $module = Module::where('id', $evaluation[0]->idModule)->get();
        return view('editEvaluation', ['evaluation' => $evaluation, 'module' => $module]);
    }

    public function update(Request $r) {
        $r->validate([
            'note' => 'required|integer|min:0|max:10',
        ]);
        
        $note = request('note');

        $evaluation = Evaluation::where('evaluationDate', $r->evaluationDate)->update([
            'note' => $note,
        ]);
        
        $student = Student::where('dni', Session::get('dni'))->get();
        $modules = Student::find(Session::get('dni'))->modules;
        $evaluations = Student::find(Session::get('dni'))->evaluations;
        return view('viewStudent', ["student" => $student, "modules" => $modules, "evaluations" => $evaluations]);
    }
}
