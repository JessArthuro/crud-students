<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ApisController;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::view('/', 'home.index')->name('home');

Route::resource('students', StudentsController::class);

Route::get('api', [ApisController::class, 'index'])->name('api.index');
