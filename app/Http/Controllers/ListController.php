<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Entry;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list(){

        // $gastypes = Entry::distinct()->pluck('gastype');

        // $entries = Entry::all();
        $stations = Station::all();
        $entries = Entry::all();

        
        return view('list', compact('stations', 'entries'));
    }

public function getStationData($stationId)
    {
        $station = Station::find($stationId);
        if (!$station) {
            return response()->json(['error' => 'Station not found'], 404);
        }

        $entries = $station->entries; // assuming you have a relationship between Station and Entry models

        $data = [
            'entries' => $entries->map(function ($entry) {
                return [
                    'idno' => $entry->idno,
                    'sampleno' => $entry->sampleno,
                    'gastype' => $entry->gastype,
                ];
            })->all(),
        ];

        return response()->json($data);
    }


public function getEntries(Request $request)
{
    $stationId = $request->input('stationId');
    $entries = Entry::where('station_id', $stationId)->get();
    return response()->json($entries);
}

    public function show($id)
    {
        $station = Station::find($id);
        $entries = Entry::where('station_id', $id)->get();

        return response()->json($entries);
    }


}