<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/students', [StudentController::class, 'index'])
    ->name('students.index');


// ✅ CREATE ROUTE (PEHLE)
Route::get('/students/create', [StudentController::class, 'create'])
    ->name('students.create');


// ✅ STORE ROUTE
Route::post('/students', [StudentController::class, 'store'])
    ->name('students.store');


// ✅ SHOW ROUTE (BAAD ME)
Route::get('/students/{id}', [StudentController::class, 'show'])
    ->name('students.show');