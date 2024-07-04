<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineChartController;

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

Route::get('/line-chart', [LineChartController::class, 'lineChart']);

Route::get('/rawg', function () {
    return view('rawg');
});

Route::get('chart', [ChartJSController::class, 'index']);