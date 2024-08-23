<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function index(){
        $entries = EntryController::all()->toArray();
        return view('entry.index', compact('entries')); 
    }

    public function create(){
        return view('entry.create');
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
