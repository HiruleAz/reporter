<?php

use App\Http\Controllers\CalibrateChartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TestRunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineChartController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StandardChartController;
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

    return view('index',  [IndexController::class, 'table']);
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/standard', function () {
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

// Route::get('/testrun', function () {
//     return view('testrun');
// });

Route::get('/standardisedg', [LineChartController::class, 'lineChart']);

Route::get('/standardg', [StandardChartController::class, 'standardChart']);

Route::get('/calibrationg', [CalibrateChartController::class, 'calibrateChart']);

Route::get('google-line-chart', 'HomeController@googleLineChart');

Route::get('chart', [ChartJSController::class, 'index']);