<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
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

Route::get('/', [RegisterController::class, 'create']);
Route::post('/register',[RegisterController::class, 'register']);

Route::get('login',[LoginController::class, 'create']);
Route::get('logout', [LoginController::class, 'logout']);
Route::post('login', [LoginController::class, 'login']);



Route::get('school/dashboard',function(){
   return view('school.dashboard');
})->name('dashboard');


Route::get('teacher/create',[TeacherController::class, 'create']);
Route::post('teacher/store',[TeacherController::class, 'store'])->name('to_store');
Route::get('teacher/index',[TeacherController::class, 'index']);

Route::get('subject/create',[SubjectController::class, 'create']);
Route::post('subject/store',[SubjectController::class, 'store']);
Route::get('subject/index',[SubjectController::class, 'index']);


Route::get('student/create',[StudentController::class ,'create']);
Route::post('student/store',[StudentController::class, 'store']);
Route::get('student/index',[StudentController::class, 'index']);


Route::get('attendance/create',[AttendanceController::class ,'create']);
Route::post('attendance/store',[AttendanceController::class, 'store']);
Route::get('attendance/index',[AttendanceController::class, 'index']);

