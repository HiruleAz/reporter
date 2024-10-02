<?php

namespace App\Http\Controllers;

// app/Http/Controllers/ExcelImportController.php

use Illuminate\Http\Request;
use Excel;

class CrudController extends Controller
{
    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new YourImportClass, $file);

        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }
}
