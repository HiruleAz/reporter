<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalibrateChartController extends Controller
{
    public function calibrateChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        return view('calibrationg', compact('data'));
    }
}
