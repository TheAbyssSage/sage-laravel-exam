<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'index']);

Route::get('/courses', [CourseController::class, 'index']);

Route::get('/courses/create', [CourseController::class, 'create']);

Route::post('/courses', [CourseController::class, 'store']);

Route::post('/courses/{id}/toggle', [CourseController::class, 'toggle']);
