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

//materias de profesores
Route::post("/teacher/matter", [TeacherController::class, "attach"]);
Route::delete("/teacher/{teacher}/matter/{matter}", [TeacherController::class, "detach"]);
Route::get("/teacher/matter/{teacher}", [TeacherController::class, "matters"]);

//materias de estudiantes
Route::post("/student/matter", [StudentController::class, "attach_matter"]);
Route::delete("/student/{student}/matter/{matter}", [StudentController::class, "detach_matter"]);
Route::get("/student/matter/{student}", [StudentController::class, "matters"]);

//profesores de estudiantes
Route::post("/student/teacher", [StudentController::class, "attach_teacher"]);
Route::delete("/student/{student}/teacher/{teacher}", [StudentController::class, "detach_teacher"]);
Route::get("/student/teacher/{student}", [StudentController::class, "teachers"]);

//filtrado por nombre
Route::get("/student/search/{name}", [StudentController::class, "search"]);
Route::get("/teacher/search/{name}", [TeacherController::class, "search"]);
Route::get("/matter/search/{name}", [MatterController::class, "search"]);

Route::get("/student/nomatter/{student}", [StudentController::class, "no_matters"]);
Route::get("/teacher/nomatter/{teacher}", [TeacherController::class, "no_matters"]);

