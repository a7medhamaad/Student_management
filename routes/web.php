<?php

use App\Http\Controllers\BatchesController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

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
    return view('layout');
});


Route::resource('/student',StudentController::class);
Route::resource('/teacher',TeacherController::class);
Route::resource('/course',CoursesController::class);
Route::resource('/batche',BatchesController::class);
Route::resource('/enrollment',EnrollmentsController::class);
Route::resource('/payment',PaymentsController::class);

Route::get('report/report1/{pid}',[ReportController::class,'report1']);