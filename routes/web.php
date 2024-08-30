<?php

use App\Http\Controllers\CalibrateChartController;
use App\Http\Controllers\CalibrationController;
use App\Http\Controllers\DerivedController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TestRunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineChartController;
use App\Http\Controllers\OutlierController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StandardChartController;
use App\Http\Controllers\StandardisedController;
use App\Livewire\Counter;


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

    return view('index',  [TestRunController::class, 'index']);
});



Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/standardised', function () {
    return view('standardised');
});

Route::get('/outlier', function () {
    return view('outlier');
});

Route::get('/calibration', function () {
    return view('calibration');
});

Route::get('/derived', function () {
    return view('derived');
});

Route::get('/variability', function () {
    return view('variability');
});

Route::get('/modal', function () {
    return view('modal');
});

Route::post('/testrun', [TestRunController::class, 'store']);

Route::get('/testrun', [TestRunController::class, 'index']);

Route::resource('entry', 'EntryController');

Route::get('/counter', Counter::class);

Route::get('/standardised1', [StandardisedController::class, 'index']);

Route::get('/outlier1', [OutlierController::class, 'index']);

Route::get('/calibration1', [CalibrationController::class, 'index']);

Route::get('/derived1', [DerivedController::class, 'index']);

// Route::get('/testrun', function () {
//     return view('testrun');
// });

Route::get('/standardisedg', [LineChartController::class, 'lineChart']);

Route::get('/standardg', [StandardChartController::class, 'standardChart']);

Route::get('/calibrationg', [CalibrateChartController::class, 'calibrateChart']);

Route::get('google-line-chart', 'HomeController@googleLineChart');

Route::get('chart', [ChartJSController::class, 'index']);