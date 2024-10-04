<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Entry;
use Illuminate\Http\Request;
use Excel;

class ExcelImportController extends Controller
{
    // public function import(Request $request)
    // {
    //     // Validate the uploaded file
    //     $request->validate([
    //         'file' => 'required|mimes:xlsx,xls',
    //     ]);

    //     // Get the uploaded file
    //     $file = $request->file('file');

    //     // Process the Excel file
    //     Excel::import(new YourImportClass, $file);

    //     return redirect()->back()->with('success', 'Excel file imported successfully!');
    // }

    public function import(Request $request)
{
    $stationName = $request->input('station_name');
    $importFile = $request->file('import_file');

    // Import the file and get the imported data
    $importedData = Excel::import($importFile);

    // Create a new station with the given name
    $station = Station::create(['name' => $stationName]);

    // Associate the imported data with the new station
    foreach ($importedData as $data) {
        $entry = new Entry();
        $entry->station_id = $station->id;
        $entry->entryno = $data['entryno'];
        $entry->idno = $data['idno'];
        $entry->sampleno = $data['sampleno'];
        $entry->gastype = $data['gastype'];
        $entry->cemsmg = $data['cemsmg'];
        $entry->cemsO2 = $data['cemsO2'];
        $entry->cemsH2O = $data['cemsH2O'];
        $entry->scems = $data['scems'];
        $entry->srmmg = $data['srmmg'];
        $entry->srmO2 = $data['srmO2'];
        $entry->srmH2O = $data['srmH2O'];
        $entry->ssrm = $data['ssrm'];
        $entry->save();
    }

    return redirect()->back()->with('status', 'Data imported successfully!');
}
}