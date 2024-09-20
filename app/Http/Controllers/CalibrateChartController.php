<?php

namespace App\Http\Controllers;

use App\Models\Entry;
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

        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        return view('standardisedg', compact('data'));
    }

    public function derivedChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];

        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        return view('derivedg', compact('data'));

       

    }

    public function standardisedChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];

        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        return view('standardisedg', compact('data'));

    }

    public function outlierChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];

        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        return view('outlierg', compact('entries'));

    }

    public function someChart()
    {
        // Replace this with your actual data retrieval logic
        $data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];

        $entries = Entry::where('gastype', '=', 'SO2')->orderBy('idno', 'asc')->get();

        return view('someg', compact('data'));

       

    }
}
