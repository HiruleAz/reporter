<?php

use App\Http\Controllers\CalibrateChartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TestRunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineChartController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StandardChartController;
use App\Http\Controllers\TableController;


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

Route::get('/standardisedg1', [LineChartController::class, 'lineChart']);

Route::get('/standardg', [StandardChartController::class, 'standardChart']);

Route::get('/calibrationg', [CalibrateChartController::class, 'calibrateChart']);


Route::get('/derivedg', [CalibrateChartController::class, 'derivedChart']);

Route::get('google-line-chart', 'HomeController@googleLineChart');

Route::get('chart', [ChartJSController::class, 'index']);