<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class LineChartController extends Controller
{
    public function lineChart()
    {
        // Replace this with your actual data retrieval logic
        $red = [
            'labels' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21'],
            'data' =>  Entry::select("date_format(created_at, '%Y-%m-%d') as date, count(*) as aggregate")
            ->get()
        ];

        $blue = [
            'labels' => ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21'],
            'data' =>  Entry::select("date_format(created_at, '%Y-%m-%d') as date, count(*) as aggregate")
            ->get()
        ];
        return view('standardisedg', compact('data'));
    }
}
