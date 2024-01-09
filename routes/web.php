<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentDashboardController;
use Illuminate\Support\Facades\Route;

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




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('student/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');



Route::get('admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('admin/students', [AdminController::class, 'adminStudents'])->name('admin.students');
Route::get('admin/exams', [AdminController::class, 'adminExams'])->name('admin.exams');
Route::get('admin/enroll', [AdminController::class, 'adminEnroll'])->name('admin.enroll');
Route::get('admin/register', [AdminController::class, 'adminReg'])->name('admin.register');
Route::get('admin/upload', [AdminController::class, 'adminUpload'])->name('admin.upload');

