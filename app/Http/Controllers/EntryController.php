<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        $students = Student::all()->toArray();
        return view('student.index', compact('students')); 
    }

    public function create(){
        return view('table.create');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);
        $student = new Student([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),

        ]);
        $student->save();
        return redirect()->route('/testrun')->with('success', 'Data Added');
    }

    public function show($id){
        $student = Student::find($id);
    }
}
