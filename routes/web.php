<?php

use App\Http\Controllers\CalibrateChartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineChartController;
use App\Http\Controllers\StandardChartController;


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
    return view('index');
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

Route::get('/rawg', [LineChartController::class, 'lineChart']);

Route::get('/standardg', [StandardChartController::class, 'standardChart']);

Route::get('/calibrationg', [CalibrateChartController::class, 'calibrateChart']);

Route::get('google-line-chart', 'HomeController@googleLineChart');

Route::get('chart', [ChartJSController::class, 'index']);