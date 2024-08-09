<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TestRunController extends Controller
{
    //Shows table
    public function table(Table $table){
        return view('index.table', [
            'table' => $table
        ]);
    }
}
