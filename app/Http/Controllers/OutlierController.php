<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class OutlierController extends Controller
{
    //Shows table
    public function index(){
        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        
        return view('outlier1', compact('entries'));
    }
}
