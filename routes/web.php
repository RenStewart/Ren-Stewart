<?php

use App\Http\Controllers\studentinfocontroller;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// 01 - going to student/index file
Route::get('/students', function () {
    return view('students.index');
})->middleware(['auth','verified'])->name('students');

// 02 - navigate to Form Add Student
Route::get('/students/add', function () {
    return view('students.add');
})->middleware(['auth','verified'])->name('add-student');

// 03 - store student info to create function under StudentInfoController
Route::post('/students/add',[studentinfocontroller::class, 'store'])
    ->middleware(['auth','verified'])
    ->name('student-store');

// 04 - get all data from studentinfo table
Route::get('/students', [studentinfocontroller::class, 'index'])
->middleware(['auth','verified'])
->name('students');

// 05 - view individually student info
Route::get('/students/{stuno}', [studentinfocontroller::class, 'show'])
->middleware(['auth','verified'])
->name('students-show');

// enrolled subjects
Route::get('/enrolledsubjects', function () {
    return view('enrolledsubjects.index');
})->middleware(['auth','verified'])->name('enrolledsubjects');

// ADD SUBJECTS
Route::get('/enrolled/add', function () {
    return view('enrolledsubjects.add');
})->middleware(['auth','verified'])->name('add-subjects');

require __DIR__.'/auth.php';
