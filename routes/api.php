<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


 //delete report
 Route::delete('dashboard/reports/s1-delete/{id}', [ReportController::class, 's1Destroy'])->name('db1.delete');
 Route::delete('dashboard/reports/s2-delete/{id}', [ReportController::class, 's2Destroy'])->name('db2.delete');
 Route::delete('dashboard/reports/s3-delete/{id}', [ReportController::class, 's3Destroy'])->name('db3.delete');
