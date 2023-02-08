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
        $module = Module::where('id', $id)->get();
        return view('editModule', ['module' => $module]);
    }

    public function update(Request $r) {
        $r->validate([
            'name' => 'required',
            'credits' => 'required|integer|min:1|max:300',
            'weeklyHours' => 'required|integer'
        ]);

        $id = request('id');
        $name = request('name');
        $credits = request('credits');
        $weeklyHours = request('weeklyHours');

        $module = Module::where('id', $id)->update([
            'name' => $name,
            'credits' => $credits,
            'weeklyHours' => $weeklyHours
        ]);
        
        $module = Module::where('id', $id)->get();
        $students = Module::find($id)->students;
        return view('viewModule', ["module" => $module, "students" => $students]);
    }

    public function viewModule($id){
        $module = Module::where('id', $id)->get();
        $students = Module::find($id)->students;
        return view('viewModule', ["module" => $module, "students" => $students]);
    }

    public function deleteModule(){
        $id = request('id');
        Module::destroy($id);
        return redirect()->action([ModuleController::class, 'index']);
    }

    public function create(){
        return view("createModule");
    }

    public function make(Request $request){

        request()->validate([
            'name' => 'required',
            'credits' => 'required|integer|min:0|max:350',
            'weeklyHours' => 'required|integer|min:1|max:7',
        ]);

        Module::create($request->all());
        return redirect()->action([ModuleController::class, 'index']);
    }

    

}