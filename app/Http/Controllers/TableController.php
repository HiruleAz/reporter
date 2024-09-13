<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        
        return view('index', compact('entries'));
    }
    public function raw(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        
        return view('raw1', compact('entries'));
    }

    public function derived(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        
        return view('derived1', compact('entries'));
    }

    public function standardised(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        
        return view('standardised1', compact('entries'));
    }

    public function calibrate(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        
        return view('calibration1', compact('entries'));
    }

    public function outlier(){
        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        
        return view('outlier1', compact('entries'));
    }
}
