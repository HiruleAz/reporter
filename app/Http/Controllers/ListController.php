<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $idstations = Station::all();

        
        return view('list', compact('idstations'));
    }
}
