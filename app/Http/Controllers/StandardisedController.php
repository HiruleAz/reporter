<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class StandardisedController extends Controller
{
    //Shows table
    public function index(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'NOx')->orderBy('idno', 'asc')->get();

        
        return view('standardised1', compact('entries'));
    }
}
