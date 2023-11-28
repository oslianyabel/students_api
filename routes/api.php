<?php

use App\Http\Controllers\MatterController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/matter', MatterController::class);
Route::resource('/student', StudentController::class);
Route::resource('/teacher', TeacherController::class);
Route::get("/student/search/{name}", [StudentController::class, "search"]);
Route::get("/teacher/search/{name}", [TeacherController::class, "search"]);
Route::get("/matter/search/{name}", [MatterController::class, "search"]);
//Route::get("/student/teachers/{student}", [TeacherController::class, "teachers"]);

//Route::put("/matter/{$id}", [MatterController::class,"update"]);
