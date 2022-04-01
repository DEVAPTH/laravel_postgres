<?php

use App\Models\PersonalDetailData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalProfileData;
use App\Http\Controllers\PersonalDetailDataController;
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
    return view('welcome');
});

Route::middleware(['auth', 'admin'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Peronsal Profile Data
Route::get('/personal_profile', [Controller::class,'personal_profile'])->name('personal.profile');
Route::get('/personal_profile/{id}', [Controller::class,'personal_list'])->name('personal.list');

//Personal Details Data
Route::get('/personal_detail',[Controller::class,'personal_detail'])->name('personal.detail');
Route::get('/personal_detail/{id}',[Controller::class,'personal_show'])->name('personal.show');


