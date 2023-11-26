<?php

use App\Http\Controllers\MatterController;
use App\Http\Controllers\ProfesorController;
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
Route::resource('/profesor', ProfesorController::class);

//Route::put("/matter/{$id}", [MatterController::class,"update"]);
