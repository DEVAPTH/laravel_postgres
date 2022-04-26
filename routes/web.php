<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\S1Controller;
use App\Http\Controllers\S2Controller;
use App\Http\Controllers\S3Controller;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PersonalController;
use App\Http\Livewire\Dashboard\Pages\ReportDetailComponent;
use App\Http\Livewire\Dashboard\Pages\S1ReportDetailComponent;
use App\Http\Livewire\Dashboard\Pages\S2ReportDetailComponent;
use App\Http\Livewire\Dashboard\Pages\S3ReportDetailComponent;

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
     //Create S3
    Route::view('/dahsboard/s3-reports', 'dashboard.pages.s3-create')->name('s3-dog-create');
    Route::post('/dashboard/s3-create', [S3Controller::class, 'store']);

    //report detail
    Route::get('dashboard/reports/s1-reports/{id}', S1ReportDetailComponent::class)->name('db1.report-detail');
    Route::get('dashboard/reports/s2-reports/{id}', S2ReportDetailComponent::class)->name('db2.report-detail');
    Route::get('dashboard/reports/s3-reports/{id}', S3ReportDetailComponent::class)->name('db3.report-detail');

    //table list
    Route::view('dashboard/reposts/s1', 'dashboard.components.report-list')->name('dashboard.s1-report-lists');
    Route::view('dashboard/reposts/s2', 'dashboard.components.report-list')->name('dashboard.s2-report-lists');
    Route::view('dashboard/reposts/s3', 'dashboard.components.report-list')->name('dashboard.s3-report-lists');

    //move report
    Route::get('dashboard/reports/copy-s1-to-s3/{s1_id}', [ReportController::class, 'copyS1ToS3'])->name('db1.copy-s1-to-s3');
    Route::get('/dahsboard/reports/copy-s3-to-s2/{s3_id}', [ReportController::class, 'copyS3ToS2'])->name('db3.copy-s3-to-s2');

    //admin
    Route::get('dashboard/admin-list', [Controller::class, 'getAdminList'])->name('dashboard.admin-list');
    Route::get('dashboard/admin-create', [Controller::class, 'createAdmin'])->name('dashboard.admin-create');
    Route::post('dashboard/admin-create', [Controller::class, 'store']);
    Route::delete('dashboard/admin-create/{id}', [Controller::class, 'destroy'])->name('dashboard.admin-delete');
    Route::get('dashboard/admin-edit/{id}', [Controller::class, 'show'])->name('dashboard.admin-edit');
    Route::put('dashboard/admin-edit/{id}', [Controller::class, 'update'])->name('dashboard.admin-update');

    //power-grid table
    // Route::get('dashboard/reposts/s1',S1ReportComponent::class)->name('dashboard.reposts.s1');
    Route::view('dashboard/admin-lists', 'dashboard.components.admin-list')->name('dashboard.admin-lists');

    //s1 report detail
    Route::get('dashboard/s3-dogs/{id}/edit',[Controller::class,'editS3'])->name('dashboard.s3-report');
    Route::put('dashboard/s3-dogs/{id}',[Controller::class,'updateS3Report'])->name('dashboard.s3-update');

});
