<?php

use App\Models\PersonalDetailData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PersonalProfileData;
use App\Http\Controllers\PersonalDetailDataController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('login');
});

// Route::middleware(['auth', 'admin'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth', 'admin']], function () {
    // Route::get('/dashboard', [PersonalController::class,'index'])->name('dashboard');
    Route::post('/personal_profile', [PersonalController::class,'store'])->name('person.store');

    Route::get('/personal_profile/{id}', [PersonalController::class,'show'])->name('personal.list');


    //Personal Details Data
    Route::get('/personal_detail/{id}',[Controller::class,'personal_show'])->name('personal.show');

    Route::get('/dashboard/s1-reports', [ReportController::class,'getS1Reports'])->name('db1.reports');
    Route::get('/dashboard/s2-reports', [ReportController::class,'getS2Reports'])->name('db2.reports');
    Route::get('dashboard/s1-reports/{id}',[ReportController::class,'s1reportDetail'])->name('db1.report-detail');
    Route::get('dashboard/s2-reports/{id}',[ReportController::class,'s2reportDetail'])->name('db2.report-detail');
    Route::get('dashboard/copy-s1-to-s3/{s1_id}',[ReportController::class,'copyS1ToS3'])->name('db1.copy-s1-to-s3');

    Route::get('dashboard/admin-list',[Controller::class,'getAdminList'])->name('dashboard.admin-list');


});



