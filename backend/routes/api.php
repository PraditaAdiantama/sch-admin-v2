<?php

use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('')->group(function () {
    Route::apiResource('/students', StudentController::class);
    Route::apiResource('/majors', MajorController::class);
    Route::apiResource('/teachers', TeacherController::class);
    Route::apiResource('/subjects', SubjectController::class);
});