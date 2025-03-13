<?php

use Illuminate\Support\Facades\Route;

Route::resource('Students', StudentController::class);
Route::resource('Courses', CoursesController::class);
