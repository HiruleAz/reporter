<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class ShowController extends Controller
{
    public function show(){

        // $data = table::all();

        return view('testrun');
        // return view('testrun', compact('data'));
    }
}
