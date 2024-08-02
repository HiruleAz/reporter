<?php

namespace App\Http\Controllers;
use  App\Models\Site;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function table()
    {
        $table = Site::all();
        return view('index', compact('table'));
    }
}
