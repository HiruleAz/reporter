<?php

namespace App\Imports;

use App\Models\Entry;
use App\Models\Station;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;


class EntryImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            $entry = Entry::where('entryno', $row['entryno'])->first();
            if($entry){

                $entry->update([
                    'idno' => $row['idno'] ?? '',
                    'sampleno' => $row['sampleno'] ?? '',
                    'sampleuse' => $row['sampleuse'] ?? '',
                    'start' => $row['start'] ?? now(),
                    'end' => $row['end'] ?? now(),
                    'gastype' => $row['gastype'] ?? '',
                    'cemsmg' => $row['cemsmg'] ?? '',
                    'cemsO2' => $row['cemsO2'] ?? '',
                    'cemsH2O' => $row['cemsH2O'] ?? '',
                    'scems' => $row['scems'] ?? '',
                    'srmmg' => $row['srmmg'] ?? '',
                    'srmO2' => $row['srmO2'] ?? '',
                    'srmH2O' => $row['srmH2O'] ?? '',
                    'ssrm' => $row['ssrm'] ?? '',
                ]);

            }else{

                $station = Station::where('idno', $row['idno'])->first();
                if(!$station){
                // Create new station if it doesn't exist
                $station = Station::create([
                    'idno' => $row['idno'],
                    'idname' => $row['idname'] ?? '',
                    'idcreated' => $row['idcreated'] ?? now(),
                    'idpassword' => $row['idpassword'] ?? '',
                    'created_at' => $row['created_at'] ?? '',
                    'updated_at' => $row['updated_at'] ?? '',
                    // Add more columns as needed
                ]);
            }

                Entry::create([
                    'entryno' => Entry::max('entryno') + 1, 
                    'idno' => $row['idno'] ?? '',
                    'sampleno' => $row['sampleno'] ?? 0,
                    'sampleuse' => $row['sampleuse'] ?? '',
                    'start' => $row['start'] ?? now(),
                    'end' => $row['end'] ?? now(),
                    'gastype' => $row['gastype'] ?? '',
                    'cemsmg' => $row['cemsmg'] ?? 0.0,
                    'cemsO2' => $row['cemsO2'] ?? 0.0,
                    'cemsH2O' => $row['cemsH2O'] ?? 0.0,
                    'scems' => $row['scems'] ?? 0.0,
                    'srmmg' => $row['srmmg'] ?? 0.0,
                    'srmO2' => $row['srmO2'] ?? 0.0,
                    'srmH2O' => $row['srmH2O'] ?? 0.0,
                    'ssrm' => $row['ssrm'] ?? 0.0,
                ]);

            }

        }
    }

    public function model(array $row)
    {
        // Define how to create a model from the Excel row data
        return new Entry([
            'column1' => $row[0],
            'column2' => $row[1],
            // Add more columns as needed
        ]);
    }
}