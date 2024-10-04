<?php

use App\Http\Controllers\CalibrateChartController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TestRunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineChartController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StandardChartController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ListController; 



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('index', [TableController::class, 'index']);
});



Route::get('/hello', function () {
    return 'Hello World';
});


Route::get('/variability', function () {
    return view('variability');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::get('/warning', function () {
    return view('warning');
});

Route::post('/testrun', [TestRunController::class, 'store']);

Route::get('/raw1', [TableController::class, 'raw']);

Route::resource('entry', 'EntryController');

Route::get('/standardised1', [TableController::class, 'standardised']);

Route::get('/outlier1', [TableController::class, 'outlier']);

Route::get('/calibration1', [TableController::class, 'calibrate']);

Route::get('/derived1', [TableController::class, 'derived']);

// Route::get('/testrun', function () {
//     return view('testrun');
// });

Route::get('/standardisedgr', [CalibrateChartController::class, 'standardisedChart']);

Route::get('/outliergr', [CalibrateChartController::class, 'outlierChart']);

Route::get('/calibrationgr', [CalibrateChartController::class, 'calibrateChart']);


Route::get('/derivedgr', [CalibrateChartController::class, 'derivedChart']);

Route::get('google-line-chart', 'HomeController@googleLineChart');

Route::get('/chart', [ChartJSController::class, 'index']);

Route::get('/print', [PrintController::class, 'printSelect']);

Route::get('/list', [ListController::class, 'list']);

Route::get('/api/station/{stationId}', 'ListController@getStationData');

Route::get('/stations/{id}', 'ListController@show');

Route::get('/list', [ListController::class, 'list']);


Route::get('/add', [ListController::class, 'list']);

Route::get('/import-excel', 'ExcelImportController@index')->name('import.excel');

Route::post('/import-excel', 'ExcelImportController@import');

Route::get('/import', [EntryController::class, 'import']);

Route::post('/import', [EntryController::class, 'importExcelData']);