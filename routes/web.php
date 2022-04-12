<?php

use App\Models\PersonalDetailData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PersonalProfileData;
use App\Http\Controllers\PersonalDetailDataController;
use App\Http\Controllers\ReportController;
use App\Http\Livewire\Dashboard\Pages\ReportDetailComponent;
use App\Http\Livewire\Dashboard\Pages\S1ReportComponent;

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

    // Route::get('/dashboard/s1-reports', [ReportController::class,'getS1Reports'])->name('db1.reports');
    // Route::get('/dashboard/s2-reports', [ReportController::class,'getS2Reports'])->name('db2.reports');
    // Route::get('/dahsboard/s3-reports', [ReportController::class,'getS3Reports'])->name('db3.reports');


    Route::get('dashboard/s1-reports/{id}',ReportDetailComponent::class)->name('db1.report-detail');
    // Route::get('dashboard/s1-reports/{id}',[ReportController::class,'s1reportDetail'])->name('db1.report-detail');
    Route::get('dashboard/s2-reports/{id}',[ReportController::class,'s2reportDetail'])->name('db2.report-detail');
    Route::get('/dahsboard/s3-reports/{id}', [ReportController::class,'s3reportDetail'])->name('db3.report-detail');


    Route::get('dashboard/copy-s1-to-s3/{s1_id}',[ReportController::class,'copyS1ToS3'])->name('db1.copy-s1-to-s3');
    Route::get('/dahsboard/copy-s3-to-s2/{s3_id}', [ReportController::class,'copyS3ToS2'])->name('db3.copy-s3-to-s2');


    Route::get('dashboard/admin-list',[Controller::class,'getAdminList'])->name('dashboard.admin-list');
    Route::get('dashboard/admin-create',[Controller::class,'createAdmin'])->name('dashboard.admin-create');
    Route::post('dashboard/admin-create',[Controller::class,'store']);
    Route::delete('dashboard/admin-create/{id}',[Controller::class,'destroy'])->name('dashboard.admin-delete');
    Route::get('dashboard/admin-create/{id}',[Controller::class,'show'])->name('dashboard.admin-edit');


    // Route::get('dashboard/reposts/s1',S1ReportComponent::class)->name('dashboard.reposts.s1');
    Route::view('dashboard/admin-lists','dashboard.components.admin-list')->name('dashboard.admin-lists');
    Route::view('dashboard/reposts/s1','dashboard.components.report-list')->name('dashboard.s1-report-lists');
    Route::view('dashboard/reposts/s2','dashboard.components.report-list')->name('dashboard.s2-report-lists');
    Route::view('dashboard/reposts/s3','dashboard.components.report-list')->name('dashboard.s3-report-lists');



});



