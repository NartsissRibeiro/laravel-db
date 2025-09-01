<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;

Route::get('/teste-bootstrap', function () {
    return view('welcome');
});

Route::resource('courses', CoursesController::class);
