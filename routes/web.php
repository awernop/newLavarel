<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('home');
});

Route::get('/array', function () {
    return view('array');
});*/

Route::get('/', [MainController::class, 'showIndex']) -> name('home');

Route::get('/array', [MainController::class, 'showArray']) -> name('array');

Route::get('/reports', [ReportController::class, 'index']) -> name('report.index');

Route::delete('/reports/{report}', [ReportController::class, 'destroy']) -> name('reports.destroy');